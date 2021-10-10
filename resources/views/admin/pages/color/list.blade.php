@extends('admin.master')
@section('title','list Color')

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
    
  @if(Session::get('red'))
  <div class="alert alert-success">
    <strong>{{Session::get('red')}} <i style="margin-left:10px" class="fas fa-exclamation-circle"></i></strong> 
  </div>
  @endif

  @if(Session::get('blue'))
            <div class="alert alert-warning">
    <strong>{{Session::get('blue')}} <i style="margin-left:10px" class="fas fa-exclamation-circle"></i></strong> 
  </div>
  @endif

  @if(Session::get('white'))
            <div class="alert alert-info">
    <strong>{{Session::get('white')}} <i style="margin-left:10px" class="fas fa-exclamation-circle"></i></strong> 
  </div>
  @endif
        <table style="text-align:center" border="1px" class="table">
            <thead>
                <tr>
                    <th  style="text-align:center">STT</th>
                    <th  style="text-align:center">Tên Danh Mục</th>
                    <th  style="text-align:center">Màu</th>
                    <th></th>
                    <th></th>
 
                </tr>
            </thead>
            <tbody>
            @foreach($color as $key => $value)
                <tr>
                    <td >{{$loop->index + 1}}</td>
                    <td>{{$value->name}}</td>
                    <td style="background:{{$value->code_color}}">{{$value->code_color}}</td>
                    <td> 
                    <a href="{{route('color.edit',$value->id)}}"title="Sửa" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                    <form action="{{route('color.destroy',$value->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button  title="Xóa"class="btn btn-danger">DELETE</button>
                    </form>
                    </td>
                </tr>
            @endforeach

           
            </tbody>
        </table>



        





        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
    @include('sweetalert::alert')
    <!-- /.content -->
</div>

  
       
@stop

