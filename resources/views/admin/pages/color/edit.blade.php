@extends('admin.master')
@section('title','Edit Color')
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
                border:1px solid red;
            }
            
            </style>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <form action="{{route('color.update',$color->id)}}" method="POST" role="from">
                <legend >EDIT Màu</legend>
                @method('PUT')
                @csrf
                <hr>
                    <div class="form-group">
                        <label  for=""><b>Tên Màu</b></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Nhập tên màu"  name="name" value="{{$color->name}}">
                        @error('name')
                        <div  class="alert alert-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label  for=""><b>Mã Màu</b></label>
                        <input type="color" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Nhập tên name"  name="code_color" value="{{$color->code_color}}">
                        @error('code_color')
                        <div  class="alert alert-danger">{{$message}}</div>
                        @enderror
                        </div>

                        <button class="btn btn-primary" type="submit" >submit</button>
        </form>
       
     
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