@extends('admin.master')
@section('title','Order')

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

        <div class="">
                        <label for="">Tìm kiếm bình luận </label>
                        <input style="width:200px" class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>

      <table border="1px" class="table">
          <thead>
              <tr>
                  <th style="text-align:center">MÃ ĐH</th>
                  <th style="text-align:center">Tên Khách Hàng</th>
                  <th style="text-align:center">Status</th>
                  <th style="text-align:center">Tổng Tiền</th>
                  <th style="text-align:center">Địa chỉ</th>
                  <th style="text-align:center">Ngày Đặt</th>
                  <th style="text-align:center">Remove</th>
                 
              </tr>
          </thead>
          <tbody id="myTable">
                @foreach($order as $value)
              <tr>
                  <td style="text-align:center">{{$value['id']}}</td>
                  <td style="text-align:center">{{Auth::user()->name}}</td>
                    @if($value->status == 0)
                    <td style="text-align:center"><span style="background-color:red" class="badge badge-danger">Chưa xử lí</span></td>
                    @elseif ($value->status == 1)
                    <td style="text-align:center"><span style="background-color:#FFFF66"  class="label right badge badge-success">Đang sử lí</span></td>
                    @elseif ($value->status == 2)
                    <td style="text-align:center"><span style="background-color:#00FF33"  class="label right badge badge-success">Đang giao hàng </span></td>
                    @elseif ($value->status == 3)
                    <td style="text-align:center"><span style="background-color:#00FFFF"  class="label right badge badge-success">Giao hàng thành công </span></td>
                    @else
                    <td style="text-align:center"><span style="background-color:#CC00CC"  class="label right badge badge-success">Đơn Hủy</span></td>
                    @endif

                  <td style="text-align:center">{{$value->total}} $</td>
                  <td style="text-align:center">{{$value->address}}</td>
                <td  style="text-align:center">{{$value->created_at}}</td>
                <td style="text-align:center">
                    <a title="xem chi tiết" href="{{route('order_detail',$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    <a title="xóa " href="{{route('delete_sp',$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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