<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Section;
use Image;
use Carbon;

class NewsShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontnews.dailynews');

    }

    public function user($date)
    {   
        $dat= date('Y-m-d', strtotime(str_replace('-', '/', $date)));


        $normalnews=News::with('section')
                       ->where('pubDate', '=', $dat )
                      
                       ->get(); 

        $start = Carbon\Carbon::now()->subDays(7);

        for ($i = 0 ; $i <= 7; $i++) {
        $dates[] = $start->copy()->addDays($i);
         }
        for ($i=0; $i < count($dates); $i++) { 
            $dates[$i]=date('F j, Y', strtotime(str_replace('-', '/', $dates[$i])));
        }               


         return view('frontnews.dailynews')->withNormals($normalnews)->withDates($dates);
       

    }

    public function in()
    {
        $current=Carbon\Carbon::now()->toDateString(); 
         
        $start = Carbon\Carbon::now()->subDays(7);

        for ($i = 0 ; $i <= 7; $i++) {
        $dates[] = $start->copy()->addDays($i);
         }
        for ($i=0; $i < count($dates); $i++) { 
            $dates[$i]=date('F j, Y', strtotime(str_replace('-', '/', $dates[$i])));
        }

       

         $normalnews=News::with('section')
                       ->where('pubDate', '=', $current )
                       ->get(); 


         return view('frontnews.dailynews')->withNormals($normalnews)->withDates($dates);
       

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    

         
         $current=Carbon\Carbon::now()->toDateString(); 
         // $breakingnews=News::with('section')
         //               ->where('pubDate', '=', $current )
         //               ->get();

         $normalnews=News::with('section')
                       ->where('pubDate', '=', $current )
                       ->where('breakingnews','0')
                       ->get();  



                   






         return view('frontnews.dailynews')->withNormals($normalnews);




        



        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

         $breakingnews=News::with('section')
                       ->where('pubDate', '=', '2018-09-09' )
                       ->where('breakingnews','1')
                       ->get();

         $normalnews=News::with('section')
                       ->where('pubDate', '=', '2018-09-09' )
                       ->where('breakingnews','0')
                       ->get();  


         return view('test')->withBreaks($breakingnews)->withNormals($normalnews);       
        

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
