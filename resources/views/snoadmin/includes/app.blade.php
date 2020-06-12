

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>SNO ADMIN AREA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugins -->
        <link href="{{asset('admin/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->

        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="{{Request::root()}}/snoadmin/home" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <span class="d-inline h5 ml-1 text-logo">VGIO PANEL V14.0</span>
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo.png" alt="" height="24">
                        </span>
                    </a>

                    <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                        <li class="">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i data-feather="menu" class="menu-icon"></i>
                                <i data-feather="x" class="close-icon"></i>
                            </button>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        <li class="d-none d-sm-block">
                            <div class="app-search">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="ძებნა...">
                                        <span data-feather="search"></span>
                                    </div>
                                </form>
                            </div>
                        </li>



                    

                        <li title="სისტემიდან გასვლა">
                            <a href="#" class="nav-link right-bar-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out icon-dual icon-xs mr-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                               გასვლა
                            </a>
                        </li>

                        <li class="dropdown notification-list align-self-center profile-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <div class="media user-profile ">
                                    <div class="media-body text-left">
                                        <h6 class="pro-user-name ml-2 my-0">
                                            <span>Shreyu N</span>
                                            <span class="pro-user-desc text-muted d-block mt-1">ადმინისტრატორი </span>
                                        </h6>
                                    </div>
                                    <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                                </div>
                            </a>
                           
                        </li>
                    </ul>
                </div>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                
                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">სტატუსი</h6>
                        <span class="pro-user-desc">ადმინისტრატორი</span>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">ნავიგაცია</li>

                            <li>
                                <a href="{{Request::root()}}/snoadmin/home">
                                    <i data-feather="home"></i>
                                    <span> მთავარი </span>
                                </a>
                            </li>


                            <li>
                                <a href="{{Request::root()}}/snoadmin/home">
                                    <i data-feather="home"></i>
                                    <span> კომპანია </span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> კომპანია </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/history">კომპანიის ისტორია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/goal">მიზანი</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/industry">წარმოება</a>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> სნო </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/sno_likage">წყლის წარმომავლობა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/sno_production">პროდუქცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/sno_mineral">მინერალიზაცია და ინგედიენტები</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/sno_quality">წყლის ხარისხი</a>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> კობი </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/kobi_likage">წყლის წარმომავლობა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/kobi_production">პროდუქცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/kobi_mineral">მინერალიზაცია და ინგედიენტები</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/kobi_quality">წყლის ხარისხი</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> ბლოგი </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/new_blog">ახალი ბლოგი</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/all_blog">გამოქვეყნებული ბლოგები</a>
                                    </li>
                                    
                                </ul>
                            </li>

                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="briefcase"></i>
                                    <span> სხვადასხვა </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/contact_info">საკონტაქტო ინფორმაცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/snoadmin/settings">პარამეტრები</a>
                                    </li>
                                </ul>
                            </li>
                          

                    



                         

                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->


         



            <div class="content-page">
               

                @yield('content')

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                2020 &copy; დამზადებულია<i class='uil uil-heart text-danger font-size-12'></i> <a href="https://itweb.ge" target="_blank">ITWEB.GE_ს მიერ</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

     

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>



        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

        <!-- optional plugins -->
        <script src="{{asset('admin/assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- page js -->
        <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->

        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

    </body>
</html>
