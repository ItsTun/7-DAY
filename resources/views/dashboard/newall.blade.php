@extends('admin')
@section('content')

  




   

    <div class="section section-blog">

    

                            

                            

                            
                        
         
               <div class="row">

                
                   @foreach($news as $new)


                   <div class="col-md-4"></div>
                   <div class="col-md-4">
                        @if ( !empty ( $new->imageurl ) && count(json_decode($new->imageurl, true))>1 )
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

                                      <a href="{{route('news.sort',['id'=>$count,'co'=>$i,'dat'=>$dat])}}">
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                            {{$i}}</button>
                                        </a>

                                       
                                        
            
                                    </li>
                                        
                                        @endfor
                                       
                                   
                                    
                                    </div>


                                   
                                   
                                </ul>
                            </div>

                    

                                        
                                    
                                    </div>
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-2 col-sm-2">
                                        <div class="dropdown">
                                

                                 <button id="dLabel" type="button" class="btn btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-settings-gear-65"></i></button>





                                <ul class="dropdown-menu dropdown-sharing dropdown-menu-right " aria-labelledby="dLabel">
                                    <li class="dropdown-header text-center">

                                        <a href="{{route('news.show',$new->id)}}">
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                        <i class="nc-icon nc-album-2"></i></button>
                                        </a>

                                        <a href="{{route('news.edit',$new->id)}}">
                                             <button data-toggle="tooltip" data-placement="top" class="btn btn-success btn-link btn-sm">
                                        <i class="fa fa-edit"></i></button>
                                        </a>
                                        
                                      


                                       
                            <button type="button" data-toggle="modal" data-placement="top" class="btn btn-danger btn-link btn-sm" data-target="#smallAlertModal">
                                        <i class="fa fa-times"></i></button>

                            <div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm ">
                                    <div class="modal-content">
                                         {!! Form::open(['route' =>['news.destroy', $new->id], 'method' => 'DELETE'])!!}
                                        <div class="modal-header no-border-header">
                                            <div></div>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h5>Are you sure you want to do this? </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit" class="btn btn-danger btn-link">Yes</button>
                                            </div>
                                        </div>
                                         {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>


           


         
                                        
                                        </li>

                                   
                                   
                                </ul>
                            </div>

                                



                            </div>

                                
                            
                        
                                            
                           </div>   


                        
                         
                          <div class="card card-raised page-carousel">
                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                
                                 @foreach(json_decode($new->imageurl, true) as $image)
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
                                

                                 @foreach(json_decode($new->imageurl, true) as $image)


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
                                        
                                           
                                           <bold>By </bold>{{$new->author}}
                                        
                                    </div>
                                    <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$new->pubDate}}
                                        </div>
                                </div>
                            </div>
                        </div>

                    @elseif( !empty ( $new->imageurl ) && count(json_decode($new->imageurl, true))==1 ) 
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

                                      <a href="{{route('news.sort',['id'=>$count,'co'=>$i,'dat'=>$dat])}}">
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                            {{$i}}</button>
                                        </a>

                                       
                                        
            
                                    </li>
                                        
                                        @endfor
                                       
                                   
                                    
                                    </div>


                                   
                                   
                                </ul>
                            </div>

                    

                                        
                                    
                                    </div>
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-2 col-sm-2">
                                        <div class="dropdown">
                                

                                 <button id="dLabel" type="button" class="btn btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-settings-gear-65"></i></button>





                                <ul class="dropdown-menu dropdown-sharing dropdown-menu-right " aria-labelledby="dLabel">
                                    <li class="dropdown-header text-center">

                                        <a href="{{route('news.show',$new->id)}}">
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                        <i class="nc-icon nc-album-2"></i></button>
                                        </a>

                                        <a href="{{route('news.edit',$new->id)}}">
                                             <button data-toggle="tooltip" data-placement="top" class="btn btn-success btn-link btn-sm">
                                        <i class="fa fa-edit"></i></button>
                                        </a>
                                        
                                      


                                       
                            <button type="button" data-toggle="modal" data-placement="top" class="btn btn-danger btn-link btn-sm" data-target="#smallAlertModal">
                                        <i class="fa fa-times"></i></button>

                            <div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm ">
                                    <div class="modal-content">
                                         {!! Form::open(['route' =>['news.destroy', $new->id], 'method' => 'DELETE'])!!}
                                        <div class="modal-header no-border-header">
                                            <div></div>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h5>Are you sure you want to do this? </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit" class="btn btn-danger btn-link">Yes</button>
                                            </div>
                                        </div>
                                         {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>


           


         
                                        
                                        </li>

                                   
                                   
                                </ul>
                            </div>

                                



                            </div>

                                
                            
                        
                                            
                           </div>
                          <div class="card-image">
                               
                                
                                 @foreach(json_decode($new->imageurl, true) as $image)


                                 <a href="#"><img src="{{ asset('images/' . $image)}}"></a>
                                  <div class="text-center"><span>Water Bridge Walking Through </span></div>


 
                                  @endforeach
                                  
           
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

                    @else

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

                                      <a href="{{route('news.sort',['id'=>$count,'co'=>$i,'dat'=>$dat])}}">
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                            {{$i}}</button>
                                        </a>

                                       
                                        
            
                                    </li>
                                        
                                        @endfor
                                       
                                   
                                    
                                    </div>


                                   
                                   
                                </ul>
                            </div>

                    

                                        
                                    
                                    </div>
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-2 col-sm-2">
                                        <div class="dropdown">
                                

                                 <button id="dLabel" type="button" class="btn btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-settings-gear-65"></i></button>





                                <ul class="dropdown-menu dropdown-sharing dropdown-menu-right " aria-labelledby="dLabel">
                                    <li class="dropdown-header text-center">

                                        <a href="{{route('news.show',$new->id)}}">
                                            <button data-toggle="tooltip" data-placement="top" class="btn btn-info btn-link btn-sm">
                                        <i class="nc-icon nc-album-2"></i></button>
                                        </a>

                                        <a href="{{route('news.edit',$new->id)}}">
                                             <button data-toggle="tooltip" data-placement="top" class="btn btn-success btn-link btn-sm">
                                        <i class="fa fa-edit"></i></button>
                                        </a>
                                        
                                      


                                       
                            <button type="button" data-toggle="modal" data-placement="top" class="btn btn-danger btn-link btn-sm" data-target="#smallAlertModal">
                                        <i class="fa fa-times"></i></button>

                            <div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm ">
                                    <div class="modal-content">
                                         {!! Form::open(['route' =>['news.destroy', $new->id], 'method' => 'DELETE'])!!}
                                        <div class="modal-header no-border-header">
                                            <div></div>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h5>Are you sure you want to do this? </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit" class="btn btn-danger btn-link">Yes</button>
                                            </div>
                                        </div>
                                         {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>


           


         
                                        
                                        </li>

                                   
                                   
                                </ul>
                            </div>

                                



                            </div>

                                
                            
                        
                                            
                           </div>
                          <div class="card-image">
                           
                                <div class="video-container"><iframe width="853" height="480" src="{{$new->videourl}}" frameborder="0" allowfullscreen> </iframe></div>
           
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
                           
                    @endif 
                </div>
                        <div class="col-md-4"></div>   


                     

                    @endforeach

             


                    
                      
                </div>
           
    </div><!-- section -->


   
       


                        




@endsection