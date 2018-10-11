@extends('welcome')
@section('content')

   

   <div class="section section-blog">
         
               <div class="row">


                
                   @foreach($normals as $normal)

                   <div class="col-md-3"></div>
                   <div class="col-md-6">
                       
                    @if ( !empty ( $normal->imageurl ) && count(json_decode($normal->imageurl, true))>1 )
                        <div class="card card-blog">


                        
                         
                          <div class="card card-raised page-carousel">
                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                
                                 @foreach(json_decode($normal->imageurl, true) as $image)
                                 <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration}}"></li>
                                 @endforeach
                            </ol>
                            <div class="carousel-inner" role="listbox">


                                <div class="carousel-item active">
                                    <img class="img-fluid" src="https://gdb.voanews.com/D6E24549-1D7A-4D6A-A9FA-DFDC6F9DC9FC_cx0_cy10_cw0_w1023_r1_s.jpg" alt="First slide">
                                    <div class="carousel-  d-none d-md-block">
                                      
                                    </div>
                                </div>
                                

                                 @foreach(json_decode($normal->imageurl, true) as $image)


                                 <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{ asset('images/' . $image)}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>Discussion with general</p>
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
                                <h6 class="card-category text-info">{{$normal->section->section}}</h6>
                                <h5>
                                    <a href="#pablo">{{$normal->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$normal->summary}}<br>
                                </p>

                             
                                <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <bold>By </bold>{{$normal->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$normal->pubDate}}
                                        </div>
                                </div>
                            </div>
                        </div>

                    @elseif( !empty ( $normal->imageurl ) && count(json_decode($normal->imageurl, true))==1 ) 
                          <div class="card card-blog">
                          <div class="card-image">
                               
                                
                                 @foreach(json_decode($normal->imageurl, true) as $image)


                                 <a href="#"><img src="{{ asset('images/' . $image)}}"></a>
                                  <div class="text-center"><span>{{$normal->caption}}</span></div>


 
                                  @endforeach
                                  
           
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">{{$normal->section->section}}</h6>
                                <h5>
                                    <a href="#pablo">{{$normal->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$normal->summary}}<br>
                                </p>
                                <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>By </span>{{$normal->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$normal->pubDate}}
                                        </div>
                                </div>
                            </div>
                           </div> 

                    @else

                      <div class="card card-blog">
                          <div class="card-image">
                           
                                <div class="video-container"><iframe width="853" height="480" src="{{$normal->videourl}}" frameborder="0" allowfullscreen> </iframe></div>
           
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">{{$normal->section->section}}</h6>
                                <h5>
                                    <a href="#pablo">{{$normal->title}}</a>
                                </h5>
                                <p class="card-description content">
                                   {{$normal->summary}}<br>
                                </p>
                               <div class="card-footer text-center btn_toggle" value="More Details">
                                    
                                    <a class="btn btn-neutral btn-round"><i class="fa fa-newspaper-o"></i> Read More</a>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        
                                           
                                           <span>By </span>{{$normal->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$normal->pubDate}}
                                        </div>
                                </div>
                            </div>
                           </div> 
                           
                    @endif   
                    </div>
                        <div class="col-md-3"></div>   

                     

                    @endforeach

             


                    
                      
                </div>
           
    </div><!-- section -->



@endsection