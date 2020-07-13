<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>VGIO PESADMIN V2.0</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{Request::root()}}/assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{Request::root()}}/cpadmin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{Request::root()}}/cpadmin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{Request::root()}}/cpadmin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-6 p-5">
                                        <div class="mx-auto mb-5">
                                            <a href="index.html">
                                                <img src="{{Request::root()}}/cpadmin/assets/images/logo.png" alt="" height="24" />
                                                <h3 class="d-inline align-middle ml-1 text-logo">VGIO PESADMIN V2.0</h3>
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">მოგესალმებით!</h6>
                                        <p class="text-muted mt-1 mb-4">
                                            
                                            არასაქნქცირებული შეღწევა ისჯება საქართველოს სისხლის სამართლის კოდექსით.

                                        </p>

                                        <form action="{{ route('login') }}" class="authentication-form" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-control-label">ელექტრონული ფოსტა:</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" placeholder="ჩაწერეთ თქვენი ელფოსტა" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label class="form-control-label">პაროლი:</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" id="password" placeholder="ჩაწერეთ თქვენი პაროლი" name="password" required autocomplete="current-password">
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="checkbox-signin" checked>
                                                    <label class="custom-control-label" for="checkbox-signin">დამიმახსოვრე
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> ავტორიზაცია
                                                </button>
                                            </div>
                                        </form>
                                        <div class="py-3 text-center"></div>
                                        <div class="row">
                                           
                                        მხარდაჭერის გუნდი: ITWEB.GE <br>
                                        გიორგი ვეფხვაძე: 599 89 88 10 <br>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar">
                                            <div class="overlay"></div>
                                            <div class="auth-user-testimonial">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                            საავტორო უფლებები დაცულია &copy; ITWEB.GE
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{Request::root()}}/cpadmin/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{Request::root()}}/cpadmin/assets/js/app.min.js"></script>
        
    </body>
</html>