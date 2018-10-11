<!doctype html>
<html lang="en">

  <!-- Google Web Fonts
  ================================================== -->


  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CSource+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




  <!-- Basic Page Needs
  ================================================== -->

  <title>Сryptex</title>
  
  <!--meta info-->
  <meta charset="utf-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Vendor CSS
  ============================================ -->
   
@include('partials._css')


 

</head>

  <style>
    #more {display: none;}
  </style>

  <div class="loader"></div>

  <!--cookie-->
  <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
            </div>
          </div>
        </div>-->

  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

   

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="header sticky-header">
      
      <!-- searchform -->

      <div class="searchform-wrap">
        <div class="vc-child h-inherit">

          <form class="search-form">
            <button type="submit" class="search-button"></button>
            <div class="wrapper">
              <input type="text" name="search" placeholder="Start typing...">
            </div>
          </form>

          <button class="close-search-form"></button>

        </div>
      </div>
      
      <!-- pre-header -->


      <!-- top-header -->

      <div class="top-header">

        <div class="container">

          <div class="row justify-content-between align-items-center">

            
              
              <!-- Socials -->

              

            </div>
            
            <div class="col">
              
              <!-- logo -->

              <div class="logo-wrap">

                <center><a href="index.html" class="logo"><img src="{{asset('images/7Daylogo.png')}}" alt=""></a></center>

              </div>

            </div>

            

          </div>

        </div>

      </div>
      
      <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

      <!--main menu-->

      <div class="menu-holder">
        
        <div class="container">
          
          <div class="menu-wrap">

            <div class="nav-item">
              
              <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

              <nav id="main-navigation" class="main-navigation">
                <ul id="menu" class="clearfix">
                  <li class="dropdown"><a href="#">Home</a>
                    <!--sub menu-->
                    
                  </li>
                  
                </ul>
              </nav>

              <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->

            </div>


          </div>

        </div>

      </div>

    </header>

    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

      
        
        
          
         <a class="weatherwidget-io" href="https://forecast7.com/en/16d8796d20/yangon/" data-label_1="Myanmar" data-label_2="Yangon" data-mode="Current" data-days="3" data-theme="pure" >Myanmar Yangon</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<body>
          <div class="container">
          <div class="table-wrapper">
            <div class="table-title">
              <div class="row">
                <div class="col-sm-8"><h2><strong>News Information Details</strong></h2></div>
                <div class="col-sm-4">
                <button type="button" class="btn btn-info add-new" onclick="location.href='../HTML/AdminInsert.html';"><i class="fa fa-plus"></i>Add New
                </button>
              </div>
            </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Published Date</th>
                  <th>Issue Number</th>
                  <th>Editor</th>
                  <th></th>                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John Doe</td>
                  <td>Administration</td>
                  <td>(171) 555-2222</td>
                  <td></td>
                  <td></td>
                  <td>
                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                  </td>
                </tr>
                <tr>
                  <td>Peter Parker</td>
                  <td>Customer Service</td>
                  <td>(313) 555-5735</td>
                  <td></td>
                  <td></td>
                  <td>
                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                  </td>
                </tr>
                <tr>
                  <td>Fran Wilson</td>
                  <td>Human Resources</td>
                  <td>(503) 555-9931</td>
                  <td></td>
                  <td></td>
                  <td>
                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                  </td>
                </tr>      
              </tbody>
            </table>
        </div>    
      </div>
    </div>


    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <div class="subscribe-line subscribe-line-image" data-parallax="true"  style="background-color:#2d2d2d;text-align:center">
    <div class="container">
      
          <div class="text-center">
            <h3 class="title"><font color="white">Contact Us</font></h3>
            <p class="address"><font color="white">
              No-487, 1st Floor, Building E, Diamond Condo, Pyay Road.
            <br>01 512 887 Ext 512
            <br>Website: www.7daynewsjournal.com</a>
            <br>E-mail: editor@7daynewsjournal.com</font></p>
          </div>

                            
                </div>
              </form>
            </div>
          </div>
      


      <footer style="background-color:black;text-align:center">
      <div class="text-center" >
      
        <font color="white">
         Copyright &copy; <script>document.write(new Date().getFullYear())</script> UIT Interns All Rights Reserved.</font>
         </div>
    
        </footer>
    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  @include('partials._scripts')
  
</body>
</html>