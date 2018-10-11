<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Section;
use Image;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }




    public function index()
    {
        
        
        


        $current=Carbon\Carbon::now()->toDateString(); 

         
        $start = Carbon\Carbon::now()->subDays(7);

        for ($i = 0 ; $i <= 7; $i++) {
        $dates[] = $start->copy()->addDays($i);
         }
        for ($i=0; $i < count($dates); $i++) { 
            $dates[$i]=date('F j, Y', strtotime(str_replace('-', '/', $dates[$i])));
        }

       

         $news=News::with('section')
                       ->where('pubDate', '=', $current )
                       ->get(); 

         $count = 0; 
         $total=News::with('section')
                      ->where('pubDate', '=', $current )
                      ->count();             





       

        return view('dashboard.newall')->withNews($news)->withCount($count)
        ->withTotals($total)->withDates($dates)->withDat($current);
       

         
    }


    public function admin($date)
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


         $count = 0; 
         $total=News::with('section')
                      ->where('pubDate', '=', $dat )
                      ->count();       


                            


         return view('dashboard.newall')->withNews($normalnews)
         ->withCount($count)->withTotals($total)->withDates($dates)->withDat($dat);
       

    }


    
    public function sort($id,$co,$dat)
    {   
       
        $origin= $id-1;
        $sogin = $co-1;


        $count = 0;
        $totals=News::with('section')
                ->where('pubDate', '=', $dat )
                ->get();
        $sort = collect(new News);

        $totalcount=News::with('section')
                ->where('pubDate', '=', $dat )
                ->count();

          
       
            

            if ($sogin<$origin) 
            {   


                if ($sogin<1) {

                     $sort[$sogin]=$totals[$origin];

                }

                if($sogin>=1)
                {
                    for ($i=0; $i < $sogin ; $i++) { 
                        $sort[$i]=$totals[$i];
                    }

                     $sort[$sogin]=$totals[$origin];

                }


               



                for ($i=$sogin; $i <$origin ; $i++) 
                 { 
                   $sort[$i+1]=$totals[$i];
                 }

                 for ($i=$origin+1; $i < $totalcount; $i++) 
                 { 
                     $sort[$i]=$totals[$i];
                 }

                
                
                
            }
            if ($sogin==$origin) {
                $sort=$totals;
            }
            foreach ($totals as $to)
            {
                News::find($to->id)->delete();

            }

            foreach ($sort as $so)
            {


                $news = new News();
                $news->title=$so->title;
                $news->section_id=$so->section_id;
                $news->summary =$so->summary;

                $news->imageurl=$so->imageurl;
                $news->videourl=$so->videourl;
                $news->caption = $so->caption;
                $news->pubDate =date('Y-m-d', strtotime(str_replace('-', '/', $so->pubDate)));
                $news->issue_no = $so->issue_no;
                $news->author =$so->author;




                $news->save();
            }


            

    return redirect()->route('news.index');

            

           
        

        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $section = Section::all();
        $start = Carbon\Carbon::now()->subDays(7);

        for ($i = 0 ; $i <= 7; $i++) {
        $dates[] = $start->copy()->addDays($i);
         }
        for ($i=0; $i < count($dates); $i++) { 
            $dates[$i]=date('F j, Y', strtotime(str_replace('-', '/', $dates[$i])));
        }    





        return view('dashboard.newscreate')->withSections($section)->withDates($dates);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  




        
        
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'section_id' => 'required',
            'summary' =>'required',
            
            'pubDate' => 'required',
            'issue_no' => 'required|unique:news,issue_no',
            'author' => 'required',
           
        ]);

        if ($validator->fails()) {
            return redirect(route('news.create'))
                        ->withErrors($validator)
                        ->withInput();
        }



        $news = new News();
        $news->title=$request->title;
        $news->section_id=$request->section_id;
        $news->summary =$request->summary;


//         if ($request->hasFile('featured_image'))
//         {
//         $image=$request->file('featured_image');
//         $filename= time() . '.' . $image->getClientOriginalExtension();
//         $location= public_path('images/' . $filename);
// //            Image::make($image)->resize(800,500)->save($location);
//             Image::make($image)->save($location);
//         $news->imageurl=$filename;


        // }
         if($request->hasfile('featured_image'))

         {

            foreach($request->file('featured_image') as $file)

            {

                $name=$file->getClientOriginalName();

                $file->move(public_path().'/images/', $name);  

                $data[] = $name;  

            }
            $news->imageurl=json_encode($data);

         }
         








        $news->videourl=$request->videourl;
        $news->caption = $request->caption;
        $news->pubDate =date('Y-m-d', strtotime(str_replace('-', '/', $request->pubDate)));
        $news->issue_no = $request->issue_no;
        $news->author =$request->author;



       
        $news->save();


        

     



         return redirect()->route('news.show',$news->id);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  

        $start = Carbon\Carbon::now()->subDays(7);

        for ($i = 0 ; $i <= 7; $i++) {
        $dates[] = $start->copy()->addDays($i);
         }
        for ($i=0; $i < count($dates); $i++) { 
            $dates[$i]=date('F j, Y', strtotime(str_replace('-', '/', $dates[$i])));
        }



         $news=News::find($id);

       

        
        return view('dashboard.newshow')->withNews($news)->withDates($dates);

          Session::flash('success','You have edited news info!');


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $news=News::find($id);
        $sections = Section::all();
        $section=array();
        foreach ($sections as $new) {
            $section[$new->id]=$new->section;
            # code...
        }
        $start = Carbon\Carbon::now()->subDays(7);

        for ($i = 0 ; $i <= 7; $i++) {
        $dates[] = $start->copy()->addDays($i);
         }
        for ($i=0; $i < count($dates); $i++) { 
            $dates[$i]=date('F j, Y', strtotime(str_replace('-', '/', $dates[$i])));
        }

        return view('dashboard.newedit')->withNews($news)->withSections($section)->withDates($dates);
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
          
       
        $news=News::find($id);
        
        

        
        $news->title=$request->input('title');
        $news->section_id=$request->input('section_id');
        $news->summary =$request->input('summary');
        
        if ($request->hasFile('featured_imgae')) 
        {
        $image=$request->file('featured_imagee');
        $filename= time() . '.' . $image->getClientOriginalExtension();
        $location= public_path('images/' . $filename);
     
        $news->imageurl=$filename;

          
        }
         
             
        $news->videourl="https://www.youtube.com/embed/5hDQk-Ez1hc";
        $news->caption = $request->input('caption');
        $news->pubDate =date('Y-m-d', strtotime(str_replace('-', '/', $request->pubDate)));
        $news->issue_no = $request->input('issue_no');
        $news->author =$request->input('author');





        $news->save();
        


        Session::flash('success','You have edited news info!');



        return redirect()->route('news.show',$news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $news=News::find($id);
        $news->delete();
         return redirect()->route('news.index',$news->id);
    }
}
