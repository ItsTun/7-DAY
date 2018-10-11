@extends('admin')
@section('content')


 
<div class="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <!--  @if(count($errors)>0)
                              
                                <ul>
                                  @foreach($errors->all() as $error)
                                  <li class="alert alert-info">{{$error}}</li>
                                  @endforeach
                                </ul>

                              
                        @endif -->
                    </div>
                </div>
                <h3>Add News Info !</h3>
                 {!! Form::open(['route'=>'news.store','data-parsley-validate' => '', 'files' => 'true']) !!}
                  @csrf

                    <div class="row">

                       
                        <div class="col-md-5 col-sm-5">
                            
                            <h6>News Image</h6>

                            
                             

                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-no-padding">
                                <img src="../assets/img/image_placeholder.jpg" alt="...">
                              </div>
                              <div class="fileinput-preview fileinput-exists thumbnail img-no-padding"></div>
                              <div>
                                <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="featured_image[]" multiple="multiple"></span>
                                <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                              </div>
                            </div>

                            <div class="form-group">
                                <h6>Image Caption <span class="icon-danger"></span></h6>
                                <input placeholder="Caption" id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" value="{{ old('caption') }}" required autofocus>

                                @if ($errors->has('caption'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @endif     
                            </div>
                            <div class="form-group">
                                <h6>Video Url <span class="icon-danger"></span></h6>
                                <input type="text" name="videourl"
                                        id="videourl" class="form-control border-input" placeholder="Fill the title news info here...">
                            </div>

                            
                           

                            
                          

                        </div>

                        <div class="col-md-7 col-sm-7">

                            <div class="form-group">
                                <h6>Title <span class="icon-danger"></span></h6>
                                <input placeholder="Title" id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif        
                            </div>
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6>Section <span class="icon-danger"></span></h6>
                                    <div class="input-group border-input">
                                       <select name="section_id"
                                        id="section_id" class="selectpicker" data-style="btn btn-default" >
                                         @foreach($sections as $section)
                                                <option value='{{ $section->id  }}'>{{ $section->section }}</option>
                                            @endforeach
                                   </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h6>Publish Date</h6>
                                     <div class="form-group">
                            <div class='input-group date' id='datetimepicker'>
                                <input type='text' name="pubDate" id="pubDate" class="form-control datetimepicker" placeholder="06/07/2017" />
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
                                  
                                        <input placeholder="1234" id="issue_no" type="text" class="form-control{{ $errors->has('issue_no') ? ' is-invalid' : '' }}" name="issue_no" value="{{ old('issue_no') }}" required autofocus>

                                @if ($errors->has('issue_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('issue_no') }}</strong>
                                    </span>
                                @endif 
                                    

                                </div>
                                <div class="col-md-6">
                                    <h6>Author</h6>
                                     <input placeholder="Kyaw Zay Ya" id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" value="{{ old('author') }}" required autofocus>

                                @if ($errors->has('author'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif 
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Summary</h6>
             <!--    <textarea class="form-control textarea-limited" name="summary"
                                        id="summary" placeholder="This is a textarea limited to 150 characters." rows="13" ></textarea>
                               @if ($errors->has('summary'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif -->

                                <textarea placeholder="Detail of news summary..." id="summary" rows="13" class="form-control{{ $errors->has('summary') ? ' is-invalid' : '' }}" name="summary" value="{{ old('summary') }}" required autofocus></textarea>

                                @if ($errors->has('summary'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif 

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