@extends('admin.master')
@section('title','Comment')

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
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <legend>SẢN PHẨM </legend>
                    <img src="{{url('upload')}}/{{$product_cmt->image}}" alt="" style="width:250px">
                </div>
                <div style="margin-top:30px" class="col-md-3">
                    <h2>{{$product_cmt->name}}</h2>
                    <del style="color:red">Price : {{(number_format($product_cmt->price))}} USD</del>
                    <h4 class="f1  wow shake" data-wow-iteration="3" style="color:#fdb822">Giá Khuyến Mãi :
                        {{$product_cmt->sale_price}} USD</h4>
                    <p style="font-size:15px" class="card-text"><b>Mô tả sản phẩm :</b>Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit
                        duis
                        tristique sollicitudin nibh sit amet..</p>

                </div>

                <div class="col-md-6">

                    <form action="{{route('update_comments',$comment->id)}}" method="post">
                        @csrf
                        <legend>BÌNH LUẬN </legend>
                        <input type="hidden" name="id" value="{{$comment->id}}">
                        <div class="form-group">
                            <textarea name="question" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                readonly>{{$comment->question}}</textarea>
                        </div>


                        <div class="form-group">
                            <textarea name="answer" class="form-control" id="exampleFormControlTextarea1"
                                rows="3">{{$comment->answer}}</textarea>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id=""
                                value="0"  {{($comment->status==0)? 'checked':''}}>
                            <label class="form-check-label" for="exampleRadios1">
                                Chưa xử lí 
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id=""
                                value="1"  {{($comment->status==1)? 'checked':''}}>
                            <label class="form-check-label" for="exampleRadios2">
                               Đã Duyệt
                            </label>
                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>

            </div>
        </div>







        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
    @include('sweetalert::alert')
    <!-- /.content -->
</div>



@stop