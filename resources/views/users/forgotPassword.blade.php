<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forgot Password</title>
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
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Forgot Password</h4>
                    <p>Hey! Forgot Password Your Password ? Reset Now</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="ti-lock"></i>
                    </div>
                    <div class="submit-btn-area mt-5">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
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
