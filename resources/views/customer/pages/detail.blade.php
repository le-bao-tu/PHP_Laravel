@extends('customer.master')
@section('main')
<div class="nen">
    <div class="noidung"></div>
    <div class="col-md-6 offset-md-3"></div>
    <h3 style="color:#66410c ;font-size: 40px;">PRODUCT || DETAIL</h3>
    <span style="color:white">home \\ <span style="color:red">Product \\ Detail</span></span>
    <div style="background-color:white;margin-top:30px">
        <hr>
    </div>
    <div class="white">
        <span>share this pages : <i style="font-size:30px" class="fab fa-facebook"></i>
            <i style="font-size:30px" class="fab fa-google-plus"></i>
            <i style="font-size:30px" class="fab fa-facebook-messenger"></i>

        </span>
    </div>
</div>
<div class="container">
    <div style="margin-top:100px" class="row">
        <div class="col-md-6">
            <div style="width:500px;height:400px" class="img">
                <img src="{{url('upload')}}/{{$product->image}}" alt="" style="height:400px;width:500px">
                <div class="txt">
                    <h3 style="color:white">AMAZING CAPTION</h3>
                    <p style="color:red">Whatever It Is - Always Awesome</p>
                </div>
            </div>

            <div style="margin-left:-39px;margin-top:30px" class="owl-carousel owl-theme">

                @foreach($product->img_product as $value)
                <div class="item">
                    <h4><img src="{{url('upload')}}/{{$value->image}}" alt="" style="width:100px"></h4>
                </div>
                @endforeach



            </div>


        </div>

        <div class="col-md-6">
            <form action="{{route('add_cart')}}" method="POST">
                <input type="hidden" name="id" value="{{$product->id}}">
                @csrf
                <hr>
                <h2 style="color:#684f40"> {{$product->name}}

                </h2>

                <hr>

                @if($product->sale_price>0)
                <del style="color:#FFEFD5;font-size:20px"> Giá : {{(number_format($product->price))}} USD</del>
                <p>
                <h2 class="f1  wow shake" data-wow-iteration="3" style="color:#fdb822">Giá Khuyến Mãi :
                    {{(number_format($product->sale_price))}} USD</h2>
                </p>
                @else

                <p>{{$product->price}} USD</p>

                @endif

                <p style="font-size:15px" class="card-text"><b>Mô tả sản phẩm :</b>Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit duis
                    tristique sollicitudin nibh sit amet..</p>

                <div class="pr_switch_wrap">
                    <b class="switch_lable"> Color : </b>

                        <span class="product_color_switch">

                            @foreach($color as $value)
                            <span class="get_color" id="{{$value->color_id}}" style="margin-left:35px;">
                                <input class="form-check-input" style="background:{{$value->code_color}}" type="radio"
                                    name="attr" id="{{$value->color_id}}" value="{{$value->color_id}}" checked>
                            </span>
                            @endforeach


                </div>


                <hr>

                <div class="form-group">
                    <label class="btn btn-info" for="exampleInputName2"><b>Số Lượng</b>
                        <input type="number" class="form-control" value="1" name="quantity" min="1">
                    </label>

                    <button style="margin-left:100px" type="submit" class=" hihi btn btn-danger">ADD TO CART
                        <div class="m2">
                            <i style="font-size:20px;margin-left:10px;" class="fa">&#xf07a;</i>
                        </div>
                    </button>

                </div>
                <hr>

                <div class="owl">
                    <p class="m1">SHARE THIS :
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>
                    </p>
                    <span>
                        <p style="color:#BBBBBB">CATEGORY : {{$product->category->name}}</p>
                    </span>
                    <span>
                        <p style="color:#BBBBBB">BRANDS : {{$product->brands($product->id)->name}}</p>
                    </span>
                    <span>
                        <p style="color:#BBBBBB">CLASSIFY : {{$product->classify->name}}</p>
                    </span>
                    <span>
                        <p style="color:#BBBBBB">PRODUCT_ID: ID{{$product->id}}</p>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>


<!--  comment -->

<div class="container mt-3">
    <h2><u>QUESTION</u></h2>

    <div class="border p-3">
        @foreach($comments as $value)
        <div class="media">
            <img class="mr-3" src="{{url('fonrtend')}}/images/user.png" alt="Generic" style="width:50px">
            <div style="margin-top:20px" class="media-body">

                <h5 class="mt-0">{{$value->name}}</h5>
                <ul>
                    <li>
                        <i class="far fa-clock"> {{$value->updated_at}} </i>

                    </li>

                </ul>
                <input style="border-radius:30px;" class="form-control" type="text" placeholder="{{$value->question}}"
                    readonly>
                @if($value->answer == null)

                @else
                <div class="media mt-3">
                    <a class="pr-3" href="#">
                        <img src="{{url('fonrtend')}}/images/tu.jpg" alt="Generic" style="width:50px;border-radius:50%;">
                    </a>

                    <div class="media-body">
                        <h5 class="mt-4">ADMIN</h5>
                        <ul>
                            <li>
                                <i class="far fa-clock"> {{$value->updated_at}} </i>
                            </li>
                        </ul>
                        <input style="border-radius:30px" class="form-control" type="text"
                            placeholder="{{$value->answer}}" readonly>

                    </div>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    @if(Auth::check())
        <form action="{{route('comment')}}" method="POST" role="form">
            @csrf

            @if(Session::get('binhluan'))
            <div style="margin-top:10px" class="">
                <strong>{{Session::get('binhluan')}} <i style="margin-left:10px"
                        class="fas fa-exclamation-circle"></i></strong>
            </div>
            @endif

            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="hidden" name="users_id" value="{{!Auth::check()?'': Auth::user()->id}}">
            <div style="margin-top:20px" class="form-group">
                <textarea name="question" class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="nội dung bình luận ......"></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Đăng</button>
        </form>
        @endif
</div>


<div class="container-fluid">
    <div style="margin-top:50px;margin-left:50px" class="row">
        <div class="col-md-12">
            <div>
                <img src="{{url('fonrtend')}}/images/detail1_02.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/detail4_04.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/detail2_03.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/detail5_05.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/detail6_06.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/detail7_07.jpg" alt="" style="width:250px">
            </div>



        </div>
    </div>


    <script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true
    });
    </script>

    @include('sweetalert::alert')

    @stop