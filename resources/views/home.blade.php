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
      <title>GRP3 CardShop</title>
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
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>GRP3  <br>Card Shop </h1>
                                    <p>There are many variations of card holders <br>available, but the majority have suffered loss
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="products">Top Cards Exhibition</a>
                                 </div>
                              </div>  
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>GRP3  <br>Card Shop </h1>
                                    <p>Are you the next card holder? <br>can you let go of the pandora's box?
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="products">Top Cards Exhibition </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>GRP3  <br>Card Shop </h1>
                                    <p>Here we go again!!! Don't lose hope!!! 
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="products">Top Cards Exhibition </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>GRP3  <br>Card Shop </h1>
                                    <p>Develop success from failures. Discouragement and failure are two of  <br>the surest stepping stones to success.” —Dale Carnegie
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="products">Top Cards Exhibition </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- we_do -->
      <div class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>What we do </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="we1" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#we1" data-slide-to="0" class="active"></li>
                        <li data-target="#we1" data-slide-to="1"></li>
                        <li data-target="#we1" data-slide-to="2"></li>
                        <li data-target="#we1" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>to be filled

                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                           <p>to be filled</p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>to be filled</p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we2.png')}} alt="#"/></i>
                                          <h3>App <br>development</h3>
                                          <p>to be filled
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we3.png' )}}alt="#"/></i>
                                          <h3>website <br>design</h3>
                                          <p>to be filled
                                           </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>to be filled
                                           </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>to be filled
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src={{asset('assets/images/we1.png')}} alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>to be filled
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#we1" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#we1" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end we_do -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About GRP3</h2>
                     <p>Started from scratch with a random team match up that's slowly getting recognized </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- portfolio -->
      <div class="portfolio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>We Have Done Portfolio  </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src={{asset('assets/images/prot1.png')}} alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>to be filled</h3>
                           <p>to be filled</p>
                           </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src={{asset('assets/images/prot2.png')}} alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>to be filled</h3>
                           <p>to be filled</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src={{asset('assets/images/prot3.png')}} alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>to be filled</h3>
                           <p>to be filled</p>
                           </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src={{asset('assets/images/prot4.png')}} alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>to be filled</h3>
                           <p>to be filled</p>
                     </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end portfolio -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6">
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