<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer || Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v13/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v13/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/lf/Login_v13/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v13/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v13/css/main.css">

    <meta name="robots" content="noindex, follow">
</head>

<style>
.limiter {
    background: url(http://toantienhousing.vn/upload/image/co-mot-ha-noi-that-dep-ve-dem3.png)  ;
}


.is-invalid {
    border: 1px solid red;
}
.login100-more{
    width: calc(0%);
    
}
</style>

<body style="background-color: #999999;">
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style=""></div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form method="post" action="{{route('customer.registers')}}" role="from">
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>
                    @csrf
                    <div class="form-group">
                        <label for=""><b>name</b></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id=""
                            placeholder="Nhập tên name" name="name">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Email</b></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id=""
                            placeholder="Nhập email" name="email">
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Phone</b></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id=""
                            placeholder="Nhập phone" name="phone">
                        @error('phone')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Password</b></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id=""
                            placeholder="Nhập mật khẩu" name="password">
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                   
                    

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <a href="#" class="txt2 hov1">
                                        Terms of User
                                    </a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Sign Up
                            </button>
                        </div>
                        <a href="{{route('customer.logen')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/animsition/js/animsition.min.js"></script>

    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/bootstrap/js/popper.js"></script>
    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/select2/select2.min.js"></script>

    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/daterangepicker/moment.min.js"></script>
    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="https://colorlib.com/etc/lf/Login_v13/vendor/countdowntime/countdowntime.js"></script>

    <script src="https://colorlib.com/etc/lf/Login_v13/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"65c167f39e6ec755","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'>
    </script>
</body>

</html>