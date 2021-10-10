<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v4/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v4/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v4/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v4/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v4/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v4/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v4/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v4/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v4/css/main.css">

    <meta name="robots" content="noindex, follow">
</head>

<body>
    <style>
    .limiter {
        background: url(https://images.acvmagazine.com/file/BIT-Magazine-Images/shutterstock_42758877780ccpc.jpg);
    }
    </style>
    <div class="limiter">
        <div class="container-login100" style="">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{route('admin.post_login')}}" method="POST" role="form" class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        Login
                    </span>

                    @csrf

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Email</span>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Type your email">
                       
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="form-control @error('email') is-invalid @enderror" type="password" name="password" placeholder="Type your password">
                   
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>
                    
 
                     @if(Session::get('ahihi'))
                    <div style="margin-bottom: 20px;text-align: center">
                        <span style="color:red">{{Session::get('ahihi')}} </span>
                    </div>
                    @endif
                    
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Or Sign Up Using
                        </span>
                    </div>
                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/bootstrap/js/popper.js"></script>
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/daterangepicker/moment.min.js"></script>
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="https://colorlib.com/etc/lf/Login_v4/js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>