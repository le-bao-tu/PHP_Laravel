<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer | | ELIAH SHOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css
    " integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/fontawesome-free-5.15.1-web/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/product.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/home/home.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/blog/blog.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('fonrtend')}}/assets/css/animate.css">
    <script src="{{url('fonrtend')}}/assets/css/wow.min.js"></script>
    <script type="text/javascript">
    new WOW().init();
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{url('fonrtend')}}/assets/css/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.dialog {
    /* position: fixed; */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
    opacity: 0;
    transition: opacity linear 0.2s;
}

.overlay-close {
    position: absolute;
    width: 100%;
    height: 100%;
    cursor: default;
}

.dialog:target {
    visibility: visible;
    opacity: 1;
}


.overlay {
    background-color: rgba(0, 0, 0, 0.3);
}

.dialog-body {
    max-width: 400px;
    position: absolute;
    padding: 16px;
    background-color: #fff;
    left: 1339px;
    top: 57px;
}

.dialog-close-btn {
    position: absolute;
    top: 2px;
    right: 6px;
    text-decoration: none;
    color: #333;
}

.nav-link:hover+.dropdown-menu {
    display: block;

}

.dropdown-menu {
    display: none;
}
</style>

<body>
    <!-- đầu -->
    <div class="container-fluid">
        <div class="row">
            <div  class="nav__menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand wow shake" data-wow-iteration="3" href=""><img
                            src="{{url('fonrtend')}}/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="a1 navbar-nav">
                            <a style="color:red" class="nav-link active" href="{{route('customer.home')}}">Home <span
                                    class="sr-only">(current)</span></a>
                            <a class="nav-link" href="{{route('customer.product')}}">Product </a>
                       
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>


                                <div style="margin-left:-260px;width:750px;margin-top:20px" class="dropdown-menu coking"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="container">
                                        <div style="margin-left:" class="row">
                                            <div class="col-md-8">

                                                <div class="row">
                                                    @foreach($list_cate as $value )
                                                    <span class="col-md-4">
                                                        <a class="dropdown-item"
                                                            href="{{route('customer.shop',$value->id)}}">{{$value->name}}</a>
                                                    </span>
                                                    @endforeach
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="ahihi">
                                                    <img src="{{url('fonrtend')}}/images/l1_03.jpg" alt=""
                                                        style="width:130px;height:130px">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                            </li>
                            <a class="nav-link" href="{{route('customer.blog')}}">Blog</a>
                            <a class="nav-link" href="{{route('customer.contact')}}">Contact</a>
                        </div>
                        <div style="margin-left:230px" class="navbar-nav navbar-hotro">
                            <form action="{{route('search')}}" method="get" role="search">
                                @csrf
                                <li> 
                                     <input style="margin-top:17px;width:240px;margin-left:-44px;border-radius: 20px;" type="text"
                                 class="form-control" id="" placeholder="nhập từ khóa ..." name="key">
                              
                                </li>
                          
                            </form>

                            <li style="margin-top:24px"><a style="text-decoration:none; color:#333"
                                    href="{{route('cart.show')}}"><i class="fas fa-shopping-bag"></i><span
                                     class="cart"   style="color:red"> ( {{$cart->get_total_quantity()}} )</span></span> </a></li>

                            @if(Auth::check())
                            <li style="margin-top:9px;list-style:none;" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b
                                        class="caret"><button type="button" class="btn btn"><i class="fas fa-user"></i>
                                            {{Auth::user()->name}} </button></b>
                                </a>
                                <div style="margin-left:20px" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('customer.log_out')}}">Log Out</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            @else



                            <li style="margin-top:9px;list-style:none;" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b
                                        class="caret"><button type="button" class="btn btn"><i
                                                class="fas fa-user"></i></button></b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('customer.register')}}">Đăng kí</a>
                                    <a class="dropdown-item" href="{{route('customer.logen')}}">Đăng nhập</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            @endif

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0987654321" class="pps-btn-img">
                    <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại"
                        width="50">
                </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0987654321">
                <span class="text-hotline">0987.654.321</span>
            </a>
        </div>
    </div>