<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
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
   <body class="sidebar-main-menu">
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
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="doctor-list.html"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                           <li><a href="add-doctor.html"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                           <li><a href="profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
                           <li><a href="profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li>
                        </ul>
                     </li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Calendar</span></a></li>
                    
                    <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Chat</span></a></li>
                    
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-apps-fill"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="ri-alert-fill"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="ri-building-3-fill"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="ri-guide-fill"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-fill"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="ri-bank-card-fill"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="ri-slideshow-4-fill"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="ri-movie-fill"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="ri-grid-fill"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="ri-image-fill"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="ri-file-list-fill"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="ri-camera-fill"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="ri-checkbox-blank-fill"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="ri-notification-3-fill"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="ri-more-fill"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="ri-folder-shield-fill"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="ri-battery-low-fill"></i>Progressbars</a></li>
                           <li><a href="ui-tabs.html"><i class="ri-database-fill"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="ri-record-mail-fill"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms-wizard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-word-fill"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-wizard.html"><i class="ri-anticlockwise-fill"></i>Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html"><i class="ri-anticlockwise-2-fill"></i>Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html"><i class="ri-clockwise-fill"></i>Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-fill"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html"><i class="ri-table-fill"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-table-2"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-archive-drawer-fill"></i>Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-bar-chart-2-fill"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html"><i class="ri-file-chart-fill"></i>Morris Chart</a></li>
                           <li><a href="chart-high.html"><i class="ri-bar-chart-fill"></i>High Charts</a></li>
                           <li><a href="chart-am.html"><i class="ri-bar-chart-box-fill"></i>Am Charts</a></li>
                           <li><a href="chart-apex.html"><i class="ri-pie-chart-box-fill"></i>Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-copper-coin-fill"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html"><i class="ri-stack-fill"></i>Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html"><i class="ri-keynote-fill"></i>line Awesome</a></li>
                           <li><a href="icon-remixicon.html"><i class="ri-remixicon-fill"></i>Remixicon</a></li>
                           <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-server-fill"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html"><i class="ri-login-box-fill"></i>Login</a></li>
                           <li><a href="sign-up.html"><i class="ri-logout-box-fill"></i>Register</a></li>
                           <li><a href="pages-recoverpw.html"><i class="ri-record-mail-fill"></i>Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html"><i class="ri-chat-check-fill"></i>Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html"><i class="ri-file-lock-fill"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#map" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-2-fill"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-map.html"><i class="ri-google-fill"></i>Google Map</a></li>
                           <li><a href="#"><i class="ri-map-pin-range-line"></i>Vector Map</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-folders-fill"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-timeline.html"><i class="ri-map-pin-time-fill"></i>Timeline</a></li>
                           <li><a href="pages-invoice.html"><i class="ri-question-answer-fill"></i>Invoice</a></li>
                           <li><a href="blank-page.html"><i class="ri-checkbox-blank-fill"></i>Blank Page</a></li>
                           <li><a href="pages-error.html"><i class="ri-error-warning-fill"></i>Error 404</a></li>
                           <li><a href="pages-error-500.html"><i class="ri-error-warning-fill"></i>Error 500</a></li>
                           <li><a href="pages-pricing.html"><i class="ri-price-tag-3-fill"></i>Pricing</a></li>
                           <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-fill"></i>Pricing 1</a></li>
                           <li><a href="pages-maintenance.html"><i class="ri-git-repository-commits-fill"></i>Maintenance</a></li>
                           <li><a href="pages-comingsoon.html"><i class="ri-run-fill"></i>Coming Soon</a></li>
                           <li><a href="pages-faq.html"><i class="ri-compasses-2-fill"></i>Faq</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                              <li>
                                 <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                 <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                                 </ul>
                              </li>
                           </li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
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