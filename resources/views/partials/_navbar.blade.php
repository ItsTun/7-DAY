<nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('news.in')}}">7-Day Daily</a>


                </div>
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">



                               
                               
                           
                   
                   
                   
                   <li class="nav-item dropdown">
                                            <a href="#paper-kit" class="nav-link" data-toggle="dropdown" width="30" height="30">
                                                <div class="profile-photo-small">

                                                    <img src="{{ asset('assets/img/faces/joe-gardner-2.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-no-padding">
                                                </div>
                                            </a>
                                              <ul class="dropdown-menu dropdown-menu-right dropdown-info">
                                                 <a class="dropdown-item" data-toggle="modal" data-target="#registerModal">Control News</a>
                                                <a class="dropdown-item" href="{{route('news.create')}}">PostNews</a>
                                                
                                                <li class="divider"></li>
                                                <a class="dropdown-item" href="{{ route('log') }}">Sign out</a>
                                              </ul>
                                        </li>


                </ul>
                 <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="false">
                                <div class="modal-dialog modal-register">
                                    <div class="modal-content">
                                        <div class="modal-header no-border-header text-center">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h6 class="text-muted">Welcome !</h6>
                                            <h3 class="modal-title">7-Day Daily...</h3>
                                            
                                        </div>
                                        <div class="modal-body">
                                            @foreach($dates as $date)
                                            
                                            <a class="btn btn-block btn-round" href="{{route('admin.date',$date)}}">

                                                 {{$date}}
                                           
                                            </a>
                                           
                                            @endforeach
                                            
                                        </div>
                                        <div class="modal-footer no-border-footer"></div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </nav>