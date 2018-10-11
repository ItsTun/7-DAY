@extends('admin')
@section('content')




   

    <div class="section section-blog">

    

                            

                            

                            
                        
         
               <div class="row">
                
                   @foreach($news as $new)

                   <div class="col-md-4"></div>
                   <div class="col-md-4">
                        <div class="card card-blog">
                            
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="media-footer">
                                    
                                     
                                     <div class="dropdown">
                                

                                 <button id="dLabel" type="button" class="btn btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{++$count}}</button>





                                <ul class="dropdown-menu dropdown-sharing dropdown-menu-right " aria-labelledby="dLabel">
                                    <div class="containter">

                                        @for ($i = 1; $i <= $totals; $i++)


                                        <li class="text-center">

                                        {!! Form::model($news,['route' => ['news.update',$new->id], 'method'=>'PUT'])  !!}     

                                      
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                            {{$i}}</button>
                                        {!! Form::close() !!}

                                       
                                        
            
                                    </li>
                                        
                                        @endfor
                                       
                                   
                                    
                                    </div>


                                   
                                   
                                </ul>
                            </div>

                    

                                        
                                    
                                    </div>
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-2 col-sm-2">
                                       

                                



                            </div>

                                
                            
                        
                                            
                           </div>
                                    
                            <div class="card-image">
                                <a href="#"><img src="{{ asset('images/' . $new->imageurl)}}"></a>
                                <div class="text-center"><span>Water Bridge Walking Through </span></div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">{{$new->section->section}}</h6>
                                <h5 class="card-title">
                                    <a href="#pablo">{{$new->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$new->summary}}<br>
                                </p>
                                <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>By </span>{{$new->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$new->pubDate}}
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4"></div>   


                     

                    @endforeach

             


                    
                      
                </div>
           
    </div><!-- section -->


                        




@endsection