@extends('admin.master')
@section('title','Edit Brands')
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
                <div class="col-md-6">
                    <form action="{{route('brands.update',$brands->id)}}" method="POST" role="from" enctype="multipart/form-data">
                        <legend>SỬA DANH MỤC</legend>
                        @method('PUT')
                        @csrf
                        <hr>
                        <div class="form-group">
                            <label for=""><b>name</b></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id=""
                                placeholder="Nhập tên name" name="name" value="{{$brands->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""><b>logo</b></label>
                            <input type="file" class="form-control @error('name') is-invalid @enderror" id=""
                                placeholder="Nhập tên name" name="file" value="{{$brands->logo}}">
                                <img src="{{url('upload')}}/{{$brands->logo}}" alt="upload/{{$brands->logo}}"
                                            width="100px">
                            
                        </div>

                        <div class="form-group">
                            <label for=""><b>Chọn danh mục</b></label>
                            <select name="category_id" id="input" class="form-control" required="required">
                                <option value="">Danh Mục Sản Phẩm</option>
                                @foreach($category as $value)
                                <option value="{{$value->id}}" {{($value->id == $brands->category_id)?'selected':''}}>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-warning">Trạng Thái</button>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="input" value="1"
                                        {{($brands->status==1)? 'checked':''}}>Hiện</input>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="input" value="0"
                                        {{($brands->status==0)? 'checked':''}}>Ẩn</input>
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">submit</button>
                    </form>


                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>


@stop