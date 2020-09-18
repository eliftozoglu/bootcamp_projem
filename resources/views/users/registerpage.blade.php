<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('asset/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="{{asset('https://www.amcharts.com/lib/3/plugins/export/export.css')}}" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('asset/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- login area start -->
<div class="login-area login-s2">
    <div class="container">
        <div class="login-box ptb--100">
             <form method="POST" action="{{ route('register') }}">
                @csrf>
                <div class="login-form-head">
                    <h4>Sign up</h4>
                    <p>Hello there, Sign up and Join with Us</p>
                </div>
                <div class="login-form-body">

                    <div class="form-gp">
                        <label for="exampleInputName1">Full Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="ti-user"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                        <div class="login-other row mt-4">
                            <div class="col-6">
                                <a class="fb-login" href="#">Sign up with <i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="col-6">
                                <a class="google-login" href="#">Sign up with <i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href="{{asset('login.html')}}">Sign in</a></p>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->

<!-- jquery latest version -->
<script src="{{asset('asset/js/vendor/jquery-2.2.4.min.js')}}"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/metisMenu.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>

<!-- others plugins -->
<script src="{{asset('asset/js/plugins.js')}}"></script>
<script src="{{asset('asset/js/scripts.js')}}"></script>
</body>

</html>
