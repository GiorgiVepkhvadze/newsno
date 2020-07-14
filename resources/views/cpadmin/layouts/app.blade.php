<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>VGIO PESADMIN 2.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{Request::root()}}/cpadmin/assets/images/favicon.ico">

        <!-- plugins -->
        <link href="{{Request::root()}}/cpadmin/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{Request::root()}}/cpadmin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{Request::root()}}/cpadmin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{Request::root()}}/cpadmin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="{{Request::root()}}/pesadmin/home" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="{{Request::root()}}/cpadmin/assets/images/logo.png" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">VGIO PESADMIN V2.0</span>
                        </span>
                        <span class="logo-sm">
                            <img src="{{Request::root()}}/cpadmin/assets/images/logo.png" alt="" height="24">
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

              

                    </ul>
                </div>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="{{Request::root()}}/cpadmin/assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="{{Request::root()}}/cpadmin/assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">{{ Auth::user()->name }}</h6>
                        <span class="pro-user-desc">ადმინისტრატორი</span>
                    </div>
                    <div class="dropdown align-self-center profile-dropdown-menu">
                        <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span data-feather="chevron-down"></span>
                        </a>
                        <div class="dropdown-menu profile-dropdown">
                            <div class="dropdown-divider"></div>

                            <a href="javascript:void(0);"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>სისტემიდან გასვლა</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">ნავიგაცია</li>

                            <li>
                                <a href="{{Request::root()}}/pesadmin/home">
                                    <i data-feather="home"></i>
                                    <span> მთავარი </span>
                                </a>
                            </li>
                            <li class="menu-title">Apps</li>
                            
                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> მთავარი გვერდი </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/1">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/2">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/3">მესამე სექცია</a>
                                    </li>

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> კომპანია </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/4">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/5">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/6">მესამე სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/7">მეოთხე სექცია</a>
                                    </li>


                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/8">მეხუთე სექცია</a>
                                    </li>

                                   

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> სნო წყლის წარმომავლობა </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/9">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/10">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/11">მესამე სექცია</a>
                                    </li>

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> სნო მინ. შემადგენლობა </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/12">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/13">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/14">მესამე სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/15">მეოთხე სექცია</a>
                                    </li>

                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> სნო წყლის ხარისხი </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/16">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/17">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/18">მესამე სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/19">მეოთხე სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/20">მეხუთე სექცია</a>
                                    </li>

                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> ლიმონის სნო </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/31">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/32">მეორე სექცია</a>
                                    </li>
                                    

                                </ul>
                            </li>






                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> კობი წარმ. ხარისხი </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/21">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/22">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/23">მესამე სექცია</a>
                                    </li>

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> კობი მინ. შემადგენლობა </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/24">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/25">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/26">მესამე სექცია</a>
                                    </li>

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> ექსპორტი </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/27">პირველი სექცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/28">მეორე სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/29">მესამე სექცია</a>
                                    </li>

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> შეკვეთა </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/30">პირველი სექცია</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/boci/1">ბოცების ფასი</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/orderProduct">პროდუქცია</a>
                                    </li>

                                    


                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layout"></i>
                                    <span> ბლოგი </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/add_blog">ბლოგის დამატება</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/all_blog">ყველა ბლოგი</a>
                                    </li>

                                  
                                </ul>
                                
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layout"></i>
                                    <span> სნო პროდუქცია </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/add_product/1">ახალის დამატება</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/all_product/1">ყველა პროდუქტი</a>
                                    </li>
                                </ul>
                                
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layout"></i>
                                    <span> კობი პროდუქცია </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/add_product/2">ახალის დამატება</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/all_product/2">ყველა პროდუქტი</a>
                                    </li>
                                </ul>
                                
                            </li>





                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layout"></i>
                                    <span> სხვადასხვა </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="layouts-horizontal.html">პაროლის შეცვლა</a>
                                    </li>
                                    <li>
                                        <a href="layouts-rtl.html">ადმინების სია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/contact">საკონტაქტო ინფორმაცია</a>
                                    </li>
                                </ul>

                            </li>
                           
                           



                           
                            <li class="menu-title">Apps</li>
                           
                           
                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> კატეგორიები </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/1">პოლიტიკა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/2">მსოფლიო</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/3">ეკონომიკა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/4">სპორტი</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/5">კულტურა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/6">სამხედრო</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/c/7">ინტერვიუ</a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> სლაიდები </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/slide_list">სიახლეების ჩამონათვალი</a>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="bookmark"></i>
                                    <span> TV პიქსელი </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/new_show">ახალი გადაცემა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/upload_show">ვიდეოს ატვირთვა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/all_show">არსებული გადაცემები</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="charts-apex.html" aria-expanded="false">
                                    <i data-feather="pie-chart"></i>
                                    <span> სტატისტიკა </span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="search"></i>
                                    <span> მონიტორინგი </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                    <span> სარეკლამო </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/bm/">მთავარი</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/bt/">TV პიქსელი</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/1">პოლიტიკა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/2">მსოფლიო</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/3">ეკონომიკა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/4">სპორტი</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/5">კულტურა</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/6">სამხედრო</a>
                                    </li>
                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/b/7">ინტერვიუ</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layout"></i>
                                    <span> სხვადასხვა </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="layouts-horizontal.html">პაროლის შეცვლა</a>
                                    </li>
                                    <li>
                                        <a href="layouts-rtl.html">ადმინების სია</a>
                                    </li>
                                    <li>
                                        <a href="layouts-dark.html">ენების კონტროლი</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/contact">საკონტაქტო ინფორმაცია</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/get_about">ჩვენს შესახებ</a>
                                    </li>

                                    <li>
                                        <a href="{{Request::root()}}/pesadmin/get_advert">სარეკლამო ტექსტი</a>
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

            @yield('content')



        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i data-feather="x-circle"></i>
                </a>
                <h5 class="m-0">Customization</h5>
            </div>
    
            <div class="slimscroll-menu">
    
                <h5 class="font-size-16 pl-3 mt-4">Choose Variation</h5>
                <div class="p-3">
                    <h6>Default</h6>
                    <a href="index.html"><img src="{{Request::root()}}/cpadmin/assets/images/layouts/vertical.jpg" alt="vertical" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Top Nav</h6>
                    <a href="layouts-horizontal.html"><img src="{{Request::root()}}/cpadmin/assets/images/layouts/horizontal.jpg" alt="horizontal" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Dark Side Nav</h6>
                    <a href="layouts-dark-sidebar.html"><img src="{{Request::root()}}/cpadmin/assets/images/layouts/vertical-dark-sidebar.jpg" alt="dark sidenav" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Condensed Side Nav</h6>
                    <a href="layouts-dark-sidebar.html"><img src="{{Request::root()}}/cpadmin/assets/images/layouts/vertical-condensed.jpg" alt="condensed" class="img-thumbnail demo-img" /></a>
                </div>
                <div class="px-3 py-1">
                    <h6>Fixed Width (Boxed)</h6>
                    <a href="layouts-boxed.html"><img src="{{Request::root()}}/cpadmin/assets/images/layouts/boxed.jpg" alt="boxed"
                            class="img-thumbnail demo-img" /></a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{Request::root()}}/cpadmin/assets/js/vendor.min.js"></script>

              <!-- datatable js -->
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/jquery.dataTables.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/dataTables.responsive.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
              
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/dataTables.buttons.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/buttons.html5.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/buttons.flash.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/buttons.print.min.js"></script>
      
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/dataTables.keyTable.min.js"></script>
              <script src="{{Request::root()}}/cpadmin/assets/libs/datatables/dataTables.select.min.js"></script>
      
              <!-- Datatables init -->
              <script src="{{Request::root()}}/cpadmin/assets/js/pages/datatables.init.js"></script>



        <!-- optional plugins -->
        <script src="{{Request::root()}}/cpadmin/assets/libs/moment/moment.min.js"></script>
        <script src="{{Request::root()}}/cpadmin/assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="{{Request::root()}}/cpadmin/assets/libs/flatpickr/flatpickr.min.js"></script>

        <!-- page js -->
        <script src="{{Request::root()}}/cpadmin/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{Request::root()}}/cpadmin/assets/js/app.min.js"></script>


    </body>
</html>