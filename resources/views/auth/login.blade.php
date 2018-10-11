@include('partials._header')
<body class="full-screen register">

    @include('partials._na')
    

    <div class="wrapper">
        
                <div class="container">
                     {!! Form::open(['route'=>'login','METHOD' => 'POST']) !!}
                        @csrf

                    <div class="row">

                        <div class="col-md-4"></div>
                        <div class="col-md-4 col-sm-5 col-12 mr-auto">
                            <div class="card card-register">
                                <h3 class="card-title text-center">Welcome !</h3>
                                <div class="social">
                                    <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                    <button href="#paper-kit" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                                    <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                                </div>

                                <div class="division">
                                    <div class="line l"></div>
                                    <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <form class="register-form">
                                  
                                     <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                     <input placeholder="password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                   

                                    <button class="btn btn-block btn-round">Log In</button>
                               {!! Form::close() !!}
                                
                            </div>
                        </div>

                        <div class="col-md-4"></div>

                    </div>
                </div>
            
        </div>

    </div>

</body>

@include('partials._scripts')
</html>
