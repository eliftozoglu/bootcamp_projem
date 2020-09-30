<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Sign In</h4>
                    <p>Hello there, Sign in!</p>
                </div>
                <div class="login-form-body">
                   {{-- <form action="{{route('login')}}" method="post"> --}}

                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button type="submit" class="btn btn-primary ti-arrow-right">
                                    {{ __('Login') }}
                                </button>

{{--<td class="text-right"><button type="button" class="btn btn-primary" onclick="location.href='/products'">SUBMIT</button></td> --}}

</div>

<div class="form-footer text-center mt-5">
<p class="text-muted">Don't have an account? <a href="{{ url('/register') }}">Sign up</a></p>
</div>
</form>

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
