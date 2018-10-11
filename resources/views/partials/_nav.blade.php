<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                


                <div class="navbar-header">
                    <a class="navbar-brand">7-Day Daily</a>


                </div>







                

                	       
                                    
                                    <a class="navbar-brand" data-toggle="modal" data-target="#registerModal"><i class="fa fa-newspaper-o"></i> DayByDay</a>
                               
                               
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
                                            
                                            <a class="btn btn-block btn-round" href="{{route('user.date',$date)}}">

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