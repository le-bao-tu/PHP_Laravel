@extends('admin.master')
@section('title','Add Product')
@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fas fa-cogs"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">90<small>%</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fab fa-google-plus-g"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fas fa-cart-arrow-down"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


        <style>
        .is-invalid {
            border: 1px solid red;

        }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('product.store')}}" method="POST" role="from" enctype="multipart/form-data">
                        <legend>THÊM MỚI SẢN PHẨM</legend>
                        @csrf
                        <hr>
                        <div class="form-group">
                            <label for=""><b>name</b></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id=""
                                placeholder="Nhập tên name" name="name">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for=""><b>Price</b></label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id=""
                                placeholder="Nhập giá sản phẩm " name="price">
                            @error('price')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for=""><b>Sale_Price</b></label>
                            <input type="text" class="form-control @error('sale_price') is-invalid @enderror" id=""
                                placeholder="Nhập giá khuyến mãi" name="sale_price">
                            @error('sale_price')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>


                        <div style="margin-left:-15px" class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Image</b></label>
                                        <input type="file" class="form-control" id="" placeholder="" name="file">

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Ảnh Mô Tả</b></label>
                                        <input type="file" class="form-control " id="" placeholder="" name="files[]"
                                            multiple>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for=""><b>Chọn danh mục</b></label>
                            <select name="category_id" id="input_cate" class="form-control" required="required">
                                <option value="">Danh Mục Sản Phẩm</option>
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""><b>Chọn Thương Hiệu Sản Phẩm</b></label>
                            <select name="brands_id" id="hung" class="form-control" required="required">
                                <option value="">Thương hiệu sản phẩm </option>
                               
                                    @foreach($brands as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                            </select>
                        </div>

                         <div class="form-group">
                            <label for=""><b>Phân loại</b></label>
                            <select name="classify_id" id="input_classify" class="form-control" required="required">
                                <option value="">phân loại sản phẩm </option>
                                @foreach($classify as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                            </select>
                        </div>
 

                        <div>
                            <div class="form-group">
                                <label for=""><b>Chọn màu sản phẩm</b></label>

                                <div class="checkbox">
                                    @foreach($color as $value)
                                    <label>
                                        <input type="checkbox" value="{{$value->id}}" name="colors[]">
                                        <i class="fas fa-circle" style="color:{{$value->code_color}}"></i>
                                        @error('colors')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for=""><b>Description</b></label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                rows="5" id="comment"></textarea>

                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="btn btn-danger">Trạng Thái</div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="" value="1" checked>
                                Hiện</input>

                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="" value="0">Ẩn</input>

                            </label>
                        </div>

                        <button style="margin-top:20px" class="btn btn-primary" type="submit">submit</button>
                    </form>
                </div>





                <div class="col-md-4">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i style="font-size:24px" class="fa">&#xf279;</i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Inventory</span>
                            <span class="info-box-number">5,200</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                                50% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i style="font-size:34px" class="far fa-heart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Mentions</span>
                            <span class="info-box-number">92,050</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                            <span class="progress-description">
                                20% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i style="font-size:24px" class="fa">&#xf019;</i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Downloads</span>
                            <span class="info-box-number">114,381</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i style='font-size:34px' class='far'>&#xf075;</i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Direct Messages</span>
                            <span class="info-box-number">163,921</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">
                                40% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->

                    <div class="box box-default">

                        <!-- /.box-header -->

                        <!-- /.box-body -->
                        <div class="box-footer no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">United States of America
                                        <span class="pull-right text-red"><i class="fa fa-angle-down"></i>
                                            12%</span></a></li>
                                <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i>
                                            4%</span></a>
                                </li>
                                <li><a href="#">China
                                        <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i>
                                            0%</span></a></li>
                            </ul>
                        </div>
                        <!-- /.footer -->
                    </div>
                    <!-- /.box -->

                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Recently Added Products</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="https://thumbs.gfycat.com/UncomfortableFatherlyItaliangreyhound-size_restricted.gif"
                                            alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Samsung TV
                                            <span class="label label-warning pull-right">$1800</span></a>
                                        <span class="product-description">
                                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="https://thumbs.gfycat.com/UncomfortableFatherlyItaliangreyhound-size_restricted.gif"
                                            alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Bicycle
                                            <span class="label label-info pull-right">$700</span></a>
                                        <span class="product-description">
                                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="https://thumbs.gfycat.com/UncomfortableFatherlyItaliangreyhound-size_restricted.gif"
                                            alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Xbox One <span
                                                class="label label-danger pull-right">$350</span></a>
                                        <span class="product-description">
                                            Xbox One Console Bundle with Halo Master Chief Collection.
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="https://thumbs.gfycat.com/UncomfortableFatherlyItaliangreyhound-size_restricted.gif"
                                            alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">PlayStation 4
                                            <span class="label label-success pull-right">$399</span></a>
                                        <span class="product-description">
                                            PlayStation 4 500GB Console (PS4)
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>







        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



@stop
@section('script')
<script>
    $('#input_cate').change(function(){
        var selectedVal = $("#input_cate option:selected").val();
        var route = '{{route("find_brands")}}';
       
        $.ajax({
               type:'GET',
               dataType: 'json',
               url: route,
               data:{category:selectedVal},
               success:function(data) {
                   console.log(data);
                //   $("#msg").html(data.msg);
                var html = '';

                for(let i = 0; i<data.length; i++) {
                    html+= `<option value="${data[i].id}">${data[i].name}</option>`;
                }
                $('#hung').html(html);
                console.log(html);
               },
               error: function (data) {
                console.log(data);
                console.log("loi");
            }
            });
    });
</script>

<script>
    $('#input_cate').change(function(){
        var selectedVal = $("#input_cate option:selected").val();
        var route = '{{route("find_classify")}}';
       
        $.ajax({
               type:'GET',
               dataType: 'json',
               url: route,
               data:{category:selectedVal},
               success:function(data) {
                   console.log(data);
                //   $("#msg").html(data.msg);
                var html = '';

                for(let i = 0; i<data.length; i++) {
                    html+= `<option value="${data[i].id}">${data[i].name}</option>`;
                }
                $('#input_classify').html(html);
                console.log(html);
               },
               error: function (data) {
                console.log(data);
                console.log("loi");
            }
            });
    });
</script>
@stop