<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>VGIO ADMIN PANEL</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('admin/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
       <!-- Full calendar -->
      <link href='fullcalendar/core/main.css' rel='stylesheet' />
      <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/list/main.css' rel='stylesheet' />

      <link rel="stylesheet" href="css/flatpickr.min.css">


   </head>
   <body class="sidebar-main-menu sidebar-main">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="{{Request::root()}}/snoadmin/home">
               <img src="{{Request::root()}}/admin/images/logo.png" class="img-fluid" alt="">
               <span>XRay</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
                  </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>პანელი</span></li>
                     
                     <li>
                        <a href="{{Request::root()}}/snoadmin/home" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>მთავარი </span></a>
                     </li>
                    
                     <li>
                        <a href="{{Request::root()}}/snoadmin/inusers" class="iq-waves-effect"><i class="ri-group-fill"></i><span>მომხმარებლები</span></a>
                     </li>
   
                                    
                     <li>
                        <a href="{{ route('admin-contact') }}" class="iq-waves-effect"><i class="ri-message-fill"></i><span>კონტაქტი </span></a>
                     </li>


                     <li>
                        <a href="#company" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>კომპანია</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="company" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{Request::root()}}/snoadmin/company_header"><i class="ri-tablet-fill"></i>ისტორია Head ტექსტი</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/company_header_image"><i class="ri-device-fill"></i> საბანერო ფოტო</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/company_sveti"><i class="ri-toggle-fill"></i>ორსვეტიანი ტექსტი</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/company_mizani"><i class="ri-chat-check-fill"></i>მიზანი</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/company_sawarmo"><i class="ri-radio-button-fill"></i>საწარმო</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#eksporti" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>ექსპორტი</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="eksporti" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{Request::root()}}/snoadmin/eqsport_header_image"><i class="ri-device-fill"></i> საბანერო ფოტო</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/eqsport_sveti"><i class="ri-toggle-fill"></i>ორსვეტიანი ტექსტი</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#blogi" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>ბლოგი</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="blogi" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{Request::root()}}/snoadmin/add_blog"><i class="ri-device-fill"></i>ახალი ბლოგი</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/all_blog"><i class="ri-toggle-fill"></i>გამოქვეყნებული ბლოგი</a></li>
                        </ul>
                     </li>



                     <li>
                        <a href="#sno" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>სნო</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="sno" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{Request::root()}}/snoadmin/sno_likage"><i class="ri-device-fill"></i>წყლის წარმომავლობა</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/"><i class="ri-toggle-fill"></i>პროდუქცია</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/sno_mineral"><i class="ri-toggle-fill"></i>მინერალიზაცია და <br> ინგრედიენტები</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/sno_xarisxi"><i class="ri-toggle-fill"></i>წყლის ხარისხი</a></li>
                        </ul>
                     </li>

                     
                     <li>
                        <a href="#kobi" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>კობი</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="kobi" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{Request::root()}}/snoadmin/kobi_likage"><i class="ri-device-fill"></i>წყლის წარმომავლობა</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/"><i class="ri-toggle-fill"></i>პროდუქცია</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/kobi_mineral"><i class="ri-toggle-fill"></i>მინერალიზაცია და <br> ინგრედიენტები</a></li>
                           <li><a href="{{Request::root()}}/snoadmin/kobi_xarisxi"><i class="ri-toggle-fill"></i>წყლის ხარისხი</a></li>
                        </ul>
                     </li>

                     

                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
         <div class="iq-top-navbar header-top-sticky">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <img src="{{Request::root()}}/admin/images/logo.png" class="img-fluid" alt="">
                     <span>XRay</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                       
                        <li class="nav-item iq-full-screen">
                           <a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
                        </li>
                        
                     

                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="{{Request::root()}}/admin/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height">ადმინისტრატორი</h6>
                              <span class="font-size-12">Online</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 
                                
                                
                              
                                 
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">ჩემი პარამეტრები</h6>
                                          <p class="mb-0 font-size-12">პერსონალური ინფორმაციის ცვლილება.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();" role="button">გასვლა<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>


                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>

            </div>
         </div>
         <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               
             @yield('content')
              
               
            </div>
            <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="#">ტექნიკური მხარდაჭერის ჯგუფი 599898810</a></li>
                     
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  საავტორო უფლებები დაცულია 2020 <a href="https://itweb.ge">ITWEB.GE</a>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
         </div>
      </div>
      <!-- Wrapper END -->


      <script src="{{asset('admin/js/jquery.min.js')}}"></script>
      <script src="{{asset('admin/js/popper.min.js')}}"></script>
      <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('admin/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('admin/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('admin/js/waypoints.min.js')}}"></script>
      <script src="{{asset('admin/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('admin/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('admin/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('admin/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('admin/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('admin/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('admin/js/smooth-scrollbar.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('admin/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('admin/js/custom.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('admin/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('admin/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('admin/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('admin/js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('admin/js/kelly.js')}}"></script>
      <!-- Flatpicker Js -->
      <script src="{{asset('admin/js/flatpickr.js')}}"></script>
 

   </body>
</html>
