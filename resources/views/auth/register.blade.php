@extends('admin')

@section('content')


<div class="profile-content section">
            <div class="container">
                 {!! Form::open(['route'=>'register','data-parsley-validate' => '', 'files' => 'true']) !!}
                        @csrf
                <div class="row">
                    <div class="profile-picture">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-no-padding">
                                <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists img-no-padding"></div>
                            <div>
                                <span class="btn btn-outline-default btn-file btn-round"><span class="fileinput-new">Change Photo</span><span class="fileinput-exists">Change</span><input type="file" name="featured_image"></span>
                                <br />
                                <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <form class="settings-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                       <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                            </div>
                          <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          </div>
                          <div class="form-group">
                            <label>Confirm password</label>
                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>

                        
                          <div class="text-center">
                            <button type="submit" class="btn btn-wd btn-info btn-round">Register</button>
                          </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

@endsection
