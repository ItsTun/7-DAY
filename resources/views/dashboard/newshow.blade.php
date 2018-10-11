@extends('admin')
@section('content')

   

    <div class="section section-blog">
         
               <div class="row">
                
                  

                   <div class="col-md-4"></div>
                   <div class="col-md-4">
                        @if ( !empty ( $news->imageurl ) && count(json_decode($news->imageurl, true))>1 )
                        <div class="card card-blog">
                          <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>IssueNo:</span>{{$news->issue_no}}
                                        
                                    </div>
                                   
                                </div>


                        
                         
                          <div class="card card-raised page-carousel">
                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                
                                 @foreach(json_decode($news->imageurl, true) as $image)
                                 <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration}}"></li>
                                 @endforeach
                            </ol>
                            <div class="carousel-inner" role="listbox">


                                <div class="carousel-item active">
                                    <img class="img-fluid" src="http://www.hudsonmgmt.com/hms/images/slider-img-1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>Somewhere</p>
                                    </div>
                                </div>
                                

                                 @foreach(json_decode($news->imageurl, true) as $image)


                                 <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{ asset('images/' . $image)}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>Somewhere</p>
                                    </div>
                                </div>


 
                                  @endforeach
                                
                            </div>

                            <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>

                         

                            


                        </div>
                        
                    </div>

                            <div class="card-body">
                                <h6 class="card-category text-info">{{$news->section->section}}</h6>
                                <h5 class="card-title">
                                    <a href="#pablo">{{$news->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$news->summary}}<br>
                                </p>
                                <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newsspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <bold>By </bold>{{$news->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$news->pubDate}}
                                        </div>
                                </div>
                            </div>
                        </div>

                    @elseif( !empty ( $news->imageurl ) && count(json_decode($news->imageurl, true))==1 ) 
                          <div class="card card-blog">
                             <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>IssueNo:</span>{{$news->issue_no}}
                                        
                                    </div>
                                   
                                </div>
                          <div class="card-image">
                               
                                
                                 @foreach(json_decode($news->imageurl, true) as $image)


                                 <a href="#"><img src="{{ asset('images/' . $image)}}"></a>
                                  <div class="text-center"><span>Water Bridge Walking Through </span></div>


 
                                  @endforeach
                                  
           
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">{{$news->section->section}}</h6>
                                <h5 class="card-title">
                                    <a href="#pablo">{{$news->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$news->summary}}<br>
                                </p>
                                <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newsspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>By </span>{{$news->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$news->pubDate}}
                                        </div>
                                </div>
                            </div>
                           </div> 

                    @else

                      <div class="card card-blog">
                         <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>IssueNo:</span>{{$news->issue_no}}
                                        
                                    </div>
                                   
                                </div>
                          <div class="card-image">
                           
                                <div class="video-container"><iframe width="853" height="480" src="{{$news->videourl}}" frameborder="0" allowfullscreen> </iframe></div>
           
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">{{$news->section->section}}</h6>
                                <h5 class="card-title">
                                    <a href="#pablo">{{$news->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$news->summary}}<br>
                                </p>
                                <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newsspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>By </span>{{$news->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$news->pubDate}}
                                        </div>
                                </div>
                            </div>
                           </div> 
                           
                    @endif
                    </div>
                        <div class="col-md-4"></div>   

                     

                   

             


                    
                      
                </div>
           
    </div><!-- section -->



@endsection