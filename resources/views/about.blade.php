<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}}>
      <!-- style css -->
      <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
      <!-- responsive-->
      <link rel="stylesheet" href={{asset('assets/css/responsive.css')}}>
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src={{asset('assets/images/loading.gif')}} alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="home">
                              <img src={{asset('assets/images/logo.png')}} alt="#">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('home')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('about')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('add-to-cart')}}">Products</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2 d_none">
                     <ul class="email text_align_right">
                        <li> <a href="{{url('login')}}"> Login </a></li>
                     </ul>
                  </div>
               </div>
               </div>
            </div>
         </header>
      <!-- end header -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About GRP3</h2>
                     <p>Alright when do we have our meeting? </p>
                     <p>All orders will be delivered through email when payment is done and authenticated. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6"
                  >
                     <div class="Informa helpful">
                        <h3>Useful  Link</h3>
                        <ul>
                           <li><a href="home">Home</a></li>
                           <li><a href="about">About</a></li>
                           <li><a href="contact">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>News</h3>
                        <ul>
                           <li>Well tonights the night                            
                           </li>
                           <li>breaking news!!!                            
                           </li>
                           <li>RM ran out of coffee                            
                           </li>
                           <li>@ 1:00 A.M. struggling to                            
                           </li>
                           <li>finish the page!!!                      
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>company</h3>
                        <ul>
                           <li>A group of College Students                             
                           </li>
                           <li>most are gamers but with                       
                           </li>
                           <li> flexible skills, like                        
                           </li>
                           <li>designing, photo editing,                              
                           </li>
                           <li>and programming.
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa conta">
                        <h3>contact Us</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-map-marker" aria-hidden="true"></i> Manila, Philippines
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call +01 1234567890
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> randomstunned
                              @gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2023 All Rights Reserved. </p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                           <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src={{asset('assets/js/jquery.min.js')}}></script>
      <script src={{asset('assets/js/bootstrap.bundle.min.js')}}></script>
      <script src={{asset('assets/js/jquery-3.0.0.min.js')}}></script>
      <script src={{asset('assets/js/custom.js')}}></script>
   </body>
</html>