<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Social-Icons.css')}}">

    
    <!--====== Title ======-->
    <title>Fresh Vial - Drinking Mineral Water Delivery HTMl Template</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.nice-number.min.css')}}">
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!--====== Aanimate css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  
</head>
<body>

  <header id="header-part">
        <!--===== NAVBAR START =====-->
        <div class="navigation">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                           
                            <a class="navbar-brand" href="{{Request::root()}}">
                                <img src="{{Request::root()}}/assets/img/logo.png" alt="აქვა გეო">
                            </a> <!-- Logo -->
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> <!-- toggle Button -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    

                                    <li class="nav-item">
                                        <a class="active" href="{{Request::root()}}/about">{{ __('main.COMPANY') }}</a>
                                               <ul class="sub-menu">
                                                   <li class="li"><a href="{{Request::root()}}/about">{{ __('main.COMPANY_AQVAGEO') }}</a></li>
                                                   <li class="li"><a href="{{Request::root()}}/gols">{{ __('main.COMPANY_GOLS') }}</a></li>
                                                   <li class="li"><a href="{{Request::root()}}/production">{{ __('main.COMAPNY_INDUSTY') }}</a></li>
                                                   
                                               </ul>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="active" href="{{Request::root()}}/sno_likage">{{ __('main.SNO') }}</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="{{Request::root()}}/sno_likage">{{ __('main.WATER_LINKAGE') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/product_m/1">{{ __('main.PRODUCTION') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/sno_mineral">{{ __('main.MINERAL') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/sno_quality">{{ __('main.WATER_QUALITY') }}</a></li>
                                            
                                        </ul>
                                    </li>


                                    <li class="nav-item">
                                        <a class="active" href="{{Request::root()}}/kobi_likage">{{ __('main.KOBI') }}</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="{{Request::root()}}/kobi_likage">{{ __('main.WATER_LINKAGE') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/product_m/2">{{ __('main.PRODUCTION') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/kobi_mineral">{{ __('main.MINERAL') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/kobi_quality">{{ __('main.WATER_QUALITY') }}</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{Request::root()}}/export" class="active">{{ __('main.EXPORT') }}</a>
                                   </li>

                                   <li class="nav-item">
                                    <a href="{{Request::root()}}/blog" class="active">{{ __('main.BLOG') }}</a>
                                   </li>
                               
                                  
                                   <li class="nav-item">
                                    <a href="{{Request::root()}}/contact" class="active">{{ __('main.CONTACT') }}</a>
                                   </li>



                                </ul>
                            </div>
                            <div class="cart-search">
                                <ul>
                                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                                    <li><a id="search" href="#"><i class="fa fa-search"></i></a>
                                        <div class="search-box">
                                            <input type="search" placeholder="Search...">
                                            <button type="button"><i class="fa fa-search"></i></button>
                                        </div> 
                                    </li>
                                </ul>
                            </div> <!-- cart search -->
                        </nav>  <!-- nav -->





                        
                        
                    </div> 
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--===== NAVBAR ENDS =====-->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    
        @yield('content')


    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part" class="pt-65">
        <div class="container ">
        
            
            <div class="footer pt-20 pb-45">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about pt-30">
                            <a href="#"><img src="{{Request::root()}}/assets/img/footer_logo.png" alt="logo"></a>
                            <p>ყველა უფლება დაცულია, შპს აქუა გეო</p>
                            <div class="social-icons">
							
							<a href="#"><i class="icon ion-social-facebook"></i></a>
							<a href="#"><i class="icon ion-social-twitter"></i></a>
							<a href="#"><i class="icon ion-social-youtube"></i></a>
							</div>
   
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        
						
                    </div>
					
					 <div class="col-lg-1 col-md-3 col-sm-6">
                        
						
                    </div>
					
					
					
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>კომპანია</h5>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">ჩვენს შესახებ</a></li>
                                <li><a href="#">მიზანი</a></li>
                                <li><a href="#">წარმოება</a></li>
                                <li><a href="#">ექსპორტი</a></li>
                                <li><a href="#">ბლოგი</a></li>
                                <li><a href="#">კონტაქტი</a></li>
                            </ul>
                        </div>
                    </div>
					
					<div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>სნო</h5>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">წყლის წარმომოავლობა</a></li>
                                <li><a href="#">პროდუქცია</a></li>
                                <li><a href="#">მინერალიაცია და შემადგენლობა</a></li>
                                <li><a href="#">წყლის ხარისხი</a></li>
                                
                            </ul>
                        </div>
                    </div>
					
					
					<div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>კობი</h5>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">წყლის წარმომოავლობა</a></li>
                                <li><a href="#">პროდუქცია</a></li>
                                <li><a href="#">მინერალიაცია და შემადგენლობა</a></li>
                                <li><a href="#">წყლის ხარისხი</a></li>
                            </ul>
                        </div>
                    </div>
					
				
                
				
                </div>
            </div>
        </div>
        
        
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top">
        <img src="images/back-to-top.png" alt="Icon">
    </a>

<!--====== jquery js ======-->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    
    <!--====== Owl Carousel js ======-->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('assets/js/jquery.nice-number.min.js')}}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{asset('assets/js/validator.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{asset('assets/js/ajax-contact.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>


