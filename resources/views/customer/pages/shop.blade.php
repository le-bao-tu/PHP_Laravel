@extends('customer.master')
@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="nen">
            <div class="noidung"></div>
            <div class="col-md-6 offset-md-3"></div>
            <h3 style="color:#66410c ;font-size: 40px;">SHOP </h3>
            <span style="color:white">home \\ <span style="color:red">Shop</span></span>
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
    </div>
</div>






<div class="container">
    <div style="margin-top:50px" class="row">
        <div class="col-md-3">
            <div style=" border:1px solid black" class="list-group">
                <span href="#" class="list-group-item list-group-item-danger">
                    <h3 style="text-align:center">PRODUCT</h3>
                </span>

                <div class="container">
                    <div class="row">
                        <div class="classify">
                            <span class="btn btn-secondary">Thương Hiệu</span>
                        </div>

                        
                        <div class="cc">
                            <div class="dđ">
                                <ul class="lis">
                                    @foreach ($list_brands as $value)
                                    <li><a href="{{route('customer.shop_brands',$value->id)}}">- {{$value->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="hr">
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="classify">
                            <span class="btn btn-secondary">Phân Loại </span>
                        </div>

                        

                        <div class="cc">
                            <div class="dđ">
                                <ul class="lis">
                                    @foreach($list_classifys as $value)
                                    <li><a href="{{route('customer.shop_classify',$value->id)}}">- {{$value->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="hr">
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="classify">
                            <span class="btn btn-secondary">
                                <h5>Filter By Price </h5>
                            </span>
                        </div>
                        <form action="" id="form_order" method="get">
                            @csrf
                            <ul class="sale" name="prices" id="prices">
                                <li> <a href="{{Request::url()}}?prices=1">Dưới 100 USD</a></li>
                                <li> <a href="{{Request::url()}}?prices=2">100 USD - 300 USD</a></li>
                                <li> <a href="{{Request::url()}}?prices=3">300 USD - 500 USD</a></li>
                                <li> <a href="{{Request::url()}}?prices=4">500 USD - 700 USD</a></li>
                                <li> <a href="{{Request::url()}}?prices=5">700 USD - 1000 USD</a></li>
                                <li> <a href="{{Request::url()}}?prices=6">lớn hơn 1000 USD</a></li>
                            </ul>

                        </form>
                        <a class="mt-3 btn btn-warning" href="">Filter</a>
                        <div class="hr">
                            <hr>
                        </div>



                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="classify">
                            <span class="btn btn-secondary">Color</span>
                        </div>
                        <div style="margin-top:20px" class="checkbox">

                            <label>
                                @foreach($list_color as $value)
                                <a style="margin-left:10px;" href="{{route('customer.shop_color',$value->id)}}"><i
                                        class="fas fa-circle" style="color:{{$value->code_color}}"></i></a>
                                @endforeach
                            </label>

                        </div>
                        <div class="hr">
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="classify">
                            <span class="btn btn-secondary">Sản Phẩm yêu thích</span>
                        </div>

                        @if(Auth::check()) 
                        <div class="cc">
                            <div class="dđ">
                                <ul class="lisssss">
                                    @foreach($wish_list as $value)

                                    <div class="media">

                                        <a href="{{route('delete_wish_list',$value->id)}}"><i
                                                style="font-size:24px;margin: 15px 10px 0px 0px;color: black;"
                                                class="fa">&#xf00d;</i>
                                        </a>


                                        <img src="{{url('upload')}}/{{$value->image}}" style="height:50px;width:50px"
                                            class="mr-3" alt="...">
                                        <div class="media-body">
                                            <h6 class="mt-0">{{$value->name}}</h6>

                                            <a class="detail" href="{{route('customer.detail',$value->product_id)}}">chi tiết</a>
                                        </div>
                                    </div>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        <div class="hr">
                            <hr>
                        </div>


                    </div>
                </div>


            </div>
        </div>

        <div class="col-md-9">
            <div class="nen2shop  wow fadeInRightBig " data-wow-duration="2s">
                <div class="noidungnen">
                    <div class="anh2">
                        <h1 style="color:red"> Better</h1>
                        <h1 style="color:black">Beauty salon</h1>
                        <p> lorem ipsum dolor sit amet,consetetur adipiscing elit , sed do siusmod tempor incididunt.
                        </p>
                        <button type="button" class="btn btn-dark">SHOP - NOW</button>
                    </div>
                </div>
            </div>

            <div class="hr">
                <h4> Sản Phẩm </h4>
                <hr>
            </div>



            <div class="container">
                <div class="row">
                    <div class="album py-5 bg-light">
                        <div class="row">



                            <div class="form-group">
                                <label for=""><b>sắp xếp theo </b></label>

                                <form action="" id="form_order" method="get">
                                    @csrf
                                    <select style="width:200px;" name="shop" class="form-control" id="shop">
                                        <option value="{{Request::url()}}?sort_bys=none">--- Lọc ---</option>
                                        <option value="{{Request::url()}}?sort_bys=tang_dan">--- giá tăng dần ---
                                        </option>
                                        <option value="{{Request::url()}}?sort_bys=giam_dan">--- giá giảm dần ---
                                        </option>
                                        <option value="{{Request::url()}}?sort_bys=kytu_az">--- A đến Z --- </option>
                                        <option value="{{Request::url()}}?sort_bys=ky_tu_za">---- Z đến A ---</option>
                                    </select>
                                </form>

                            </div>
                            @foreach($list_product as $value)
                            <div style="margin-bottom:40px;margin-top:30px;" class="col-md-4">
                                <div class="card" style="width: 18 rem;height:417px">
                                    <div class="img">
                                        <img src="{{url('upload')}}/{{$value->image}}" alt=""
                                            style="height:210px;width:287px">
                                        <div class="txt">
                                            <h3 style="color:white">AMAZING CAPTION </h3>
                                            <div class="text">

                                                <a href="{{route('customer.detail',$value->id)}}"><i
                                                        style="font-size:24px" class="far fa-eye"></i></a>


                                            </div>


                                        </div>
                                    </div>

                                    <div style="margin-top:85px" class="card-body">
                                        <b style="color:#dfdcdc">{{$value->name}}</b>
                                        @if($value->sale_price>0)
                                        <div>
                                            <del> Giá : {{(number_format($value->price))}} $</del>
                                        </div>
                                        <div style="color:#fdb822">
                                            Giá khuyến mãi :{{(number_format($value->sale_price))}} $
                                        </div>
                                        @else
                                        Giá : {{(number_format($value->price))}} $


                                        @endif

                                        <div class="d-flex justify-content-between align-items-center">

                                            <small class="text-muted">Đã Bán : 1
                                                sản phẩm</small>
                                            @if(Auth::check())

                                            <span>
                                                <a href="{{route('add_wish_list',$value->id)}}">
                                                    <i style="font-size:12px" class="far fa-plus-square"></i>
                                                    <button class="button_wishlist"><span>Yêu thích</span></button>
                                                </a>
                                            </span>
                                            @else


                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach







                        </div>

                        <nav style="margin-left:350px;margin-top:30px;" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                @for($i=1;$i<=$category->lastPage();$i++)
                                    <li class="page-item {{($i== $category->currentPage())? 'active' : ''}}"><a
                                            class="page-link" href="?page={{$i}}">{{$i}}</a></li>
                                    @endfor
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 sm-1">
            <div class="image wow fadeInRightBig " data-wow-duration="2s">
                <img src="{{url('fonrtend')}}/images/m1_03.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m2_04.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m3_05.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m15_17.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m5_07.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m6_08.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m7_09.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m8_11.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m9_12.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m10_13.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m11_14.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m12_15.jpg" alt="" style="width:250px">
                <img src="{{url('fonrtend')}}/images/m14_16_11.jpg" alt="" style="width:250px">

                <div class="khung  wow rollIn  " data-wow-duration="2s">
                    <div class="follow">
                        <i style="margin-top:30px;margin-left:45%;font-size:44px" class="fab fa-instagram"></i>
                        <h4 style="text-align:center">Follow us on instagram</h4>
                        <h6 style="text-align:center;color:red">@ Teliahshop</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop