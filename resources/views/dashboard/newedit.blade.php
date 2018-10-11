@extends('admin')
@section('content')


 
<div class="main">
        <div class="section">
            <div class="container">
                <h3>Add News Info !</h3>
                 {!! Form::model($news,['route' => ['news.update',$news->id], 'method'=>'PUT'])  !!}
                  @csrf
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            
                            <h6>News Image</h6>

                            
                             

                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-no-padding">
                                 @if(!empty($news->imageurl))
                                 @foreach(json_decode($news->imageurl, true) as $image)


                                
                                    <img class="d-block img-fluid" src="{{ asset('images/' . $image)}}" alt="First slide">
                                   
                                   


 
                                  @endforeach
                                  @endif
                                
                              </div>
                              <div class="fileinput-preview fileinput-exists thumbnail img-no-padding"></div>
                              <div>
                                <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="featured_image[]" multiple="multiple"></span>
                                <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                              </div>
                            </div>

                            <div class="form-group">
                                <h6>Image Caption <span class="icon-danger"></span></h6>
                               

                                         {!! Form::text('caption', null,['class'=>'form-control border-input']) !!}
                            </div>
                            <div class="form-group">
                                <h6>Video Url <span class="icon-danger"></span></h6>
                               
                                 {!! Form::text('videourl', null,['class'=>'form-control border-input']) !!}        
                            </div>

                            
                           

                            
                          

                        </div>

                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6>Title <span class="icon-danger"></span></h6>
                                
                                         {!! Form::text('title', null,['class'=>'form-control border-input']) !!}
                            </div>
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6>Section <span class="icon-danger"></span></h6>
                                    <div class="input-group border-input">
                                       
                                    {!! Form::select('section_id', $sections, null, ['class'=>'selectpicker']) !!}
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h6>Publish Date</h6>
                                     <div class="form-group">
                            <div class='input-group date' id='datetimepicker'>
                              
                                 {!! Form::text('pubDate', null,['class'=>'form-control datetimepicker']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </span>
                            </div>
                        </div>
                                </div>
                            </div>
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6>Issue No<span class="icon-danger"></span></h6>
                                    <div class="input-group border-input">
                                        
                                        {!! Form::text('issue_no', null,['class'=>'form-control border-input']) !!}
                                        <span class="input-group-addon"></span>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h6>Author</h6>
                                    <div class="input-group border-input">
                                         {!! Form::text('author', null,['class'=>'form-control border-input']) !!}
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Summary</h6>
               
                                         {!! Form::textarea('summary', null,['class'=>'form-control textarea']) !!}
                                <h5><small><span id="textarea-limited-message" class="pull-right">150 characters left</span></small></h5>

                            </div>
              <div class="form-check">
                                
                            </div>
                        </div>
                    </div>


                    <div class="row buttons-row">
                        <div class="col-md-5 col-sm-4">
                            
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <button class="btn btn-outline-danger btn-block btn-round">Cancel</button>
                            
                        </div>
                        <div class="col-md-1 col-sm-4">
                           
                        </div>
                        <div class="col-md-3 col-sm-4">
                            
                            <button type="submit" class="btn btn-outline-primary btn-block btn-round">Confirm</button> 
                        </div>
                        
                    </div>
                 {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection