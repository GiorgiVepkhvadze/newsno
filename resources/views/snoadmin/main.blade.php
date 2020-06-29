<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>VGIO PANEL</title>
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
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="{{Request::root()}}/admin/images/logo-white.png" class="img-fluid" alt="logo"></a>
                          
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">ავტორიზაცია</h1>
                            <p>არანსაქცირებული შეღწევა ან შეღწევის მცდელობა ისჯება სისხლის სამართლის კოდექსით.</p>
                            <form method="POST" class="mt-4" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="ჩაწერეთ ელექტორნული ფოსტა" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="password"  name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="ჩაწერეთ პაროლი" autocomplete="off">
                                </div>
                                <div class="d-inline-block w-100">
                                  
                                    <button type="submit" class="btn btn-primary float-right">შესვლა</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
   </body>
</html>