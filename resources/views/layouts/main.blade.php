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

        <title>AQUA GEO | GEORGIAN WATER</title>
        <link rel="shortcut icon" href="img/favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="robots" content="Index, Follow" />
        <meta name="author" content="Digital Design" />
        <meta property="og:title" content="AQUA GEO | GEORGIAN WATER" />


   
    
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
    <link rel="stylesheet" href="{{asset('assets/css/stylesheet.css')}}">


    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <style>
        .pwite p {
            color: white;
        }
    </style>
  
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
                                <img src="{{Request::root()}}/assets/img/logo.png" width="200" alt="აქვა გეო">
                            </a> <!-- Logo -->
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> <!-- toggle Button -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">

                                    <li class="nav-item">
                                        <a href="{{Request::root()}}/about" class="active">{{ __('main.COMPANY') }}</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="active" href="{{Request::root()}}/sno_likage">{{ __('main.SNO') }}</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="{{Request::root()}}/sno_likage">{{ __('main.WATER_LINKAGE') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/sno_product">{{ __('main.PRODUCTION') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/sno_mineral">{{ __('main.MINERAL') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/sno_quality">{{ __('main.WATER_QUALITY') }}</a></li>
                                            
                                        </ul>
                                    </li>


                                    <li class="nav-item">
                                        <a class="active" href="{{Request::root()}}/kobi_likage">{{ __('main.KOBI') }}</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="{{Request::root()}}/kobi_likage">{{ __('main.KOBI_WATER_LINKAGE') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/kobi_product">{{ __('main.PRODUCTION') }}</a></li>
                                            <li class="li"><a href="{{Request::root()}}/kobi_mineral">{{ __('main.MINERAL') }}</a></li>
                                           
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{Request::root()}}/export" class="active">{{ __('main.EXPORT') }}</a>
                                   </li>

                                   <li class="nav-item">
                                    <a href="{{Request::root()}}/order" class="active">{{ __('main.ORDER') }}</a>
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





                                @if (app()->getLocale()=="ka")
                                <ul>
                                    <li>
                                        
                                        <i class="world_icon"></i> 
                                        
                                        
                                        <a id="search" href="#">GEO <i class="fa fa-angle-down"></i></a>
                                        <div class="search-box">
                                            <a href="{{Request::root()}}/lang/en">ENG</a><br>
                                            <a href="{{Request::root()}}/lang/ru">RUS</a><br>
                                        </div> 
                                    </li>
                                </ul>                                    
                                @endif

                                @if (app()->getLocale()=="en")
                                <ul>
                                    <li><i class="fa fa-globe"></i> <a id="search" href="#">ENG <i class="fa fa-angle-down"></i></a>
                                        <div class="search-box">
                                            <a href="{{Request::root()}}/lang/ka">GEO</a><br>
                                            <a href="{{Request::root()}}/lang/ru">RUS</a><br>
                                        </div> 
                                    </li>
                                </ul> 
                                @endif

                                @if (app()->getLocale()=="ru")


                                <ul>
                                    <li><i class="fa fa-globe"></i> <a id="search" href="#">RUS <i class="fa fa-angle-down"></i></a>
                                        <div class="search-box">
                                            <a href="{{Request::root()}}/lang/ka">GEO</a><br>
                                            <a href="{{Request::root()}}/lang/en">ENG</a><br>
                                        </div> 
                                    </li>
                                </ul>
                                    
                                @endif



                              


                               




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
    
    <footer id="footer-part" class="pt-20">
        <div class="container ">
        
            
            <div class="footer pt-20 pb-45">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about pt-30">
                            <a href="#"><img src="{{Request::root()}}/assets/img/footer_logo.png" alt="logo"></a>
                            <p style="font-size: 12px;">ყველა უფლება დაცულია, შპს აქვა გეო</p>
                            
                            <p>info@aquageo.ge<br>
                                +995 592 003 937<br>
                                +995 322 470 410<br>
                            </p>
                            
                         
   
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        
						
                    </div>
					
					 <div class="col-lg-1 col-md-3 col-sm-6">
                        
						
                    </div>
					
					
					
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <p style="color:#000; font-size: 21px; font-weight: 300;">კომპანია</p>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">ჩვენს შესახებ</a></li>
                                <li><a href="#">მიზანი</a></li>
                                <li><a href="#">წარმოება</a></li>
                                <li><a href="#">ექსპორტი</a></li>
                                <li><a href="#">შეკვეთა</a></li>
                                <li><a href="#">ბლოგი</a></li>
                                <li><a href="#">კონტაქტი</a></li>
                            </ul>
                        </div>
                    </div>
					
					<div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <p style="color:#000; font-size: 21px; font-weight: 300;">სნო</p>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">წყლის წარმომოავლობა</a></li>
                                <li><a href="#">პროდუქცია</a></li>
                                <li><a href="#">მინერალიაცია და შემადგენლობა</a></li>
                                <li><a href="#">წყლის ხარისხი</a></li>
                                
                            </ul>

                            <div class="social-icons">
							
                                <a href="{{ $Contact->contact_facebook }}" target="_blank"><i class="icon ion-social-facebook"></i></a>
                                <a href="{{ $Contact->contact_twitter }}" target="_blank"><i class="icon ion-social-instagram"></i></a>
                                <a href="{{ $Contact->contact_youtube }}" target="_blank"><i class="icon ion-social-youtube"></i></a>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <p style="color:#000; font-size: 21px; font-weight: 300;">კობი</p>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">წყლის წარმომოავლობა</a></li>
                                <li><a href="#">პროდუქცია</a></li>
                                <li><a href="#">მინერალიაცია და შემადგენლობა</a></li>
                                
                            </ul>

                            <div class="social-icons">
							
                                <a href="{{ $Contact->contact_facebook }}" target="_blank"><i class="icon ion-social-facebook"></i></a>
                                <a href="{{ $Contact->contact_twitter }}" target="_blank"><i class="icon ion-social-instagram"></i></a>
                                <a href="{{ $Contact->contact_youtube }}" target="_blank"><i class="icon ion-social-youtube"></i></a>
                            </div>
                        </div>
                    </div>
					
				
                
				
                </div>
            </div>
        </div>
        
        
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    

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


