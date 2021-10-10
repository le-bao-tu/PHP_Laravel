@extends('admin.master')
@section('title','list Statistical')

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

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align: center">Thống kê đơn hàng doanh số </h3>
                    <div class="container">
                        <form action="" method="post">
                            <div style="margin-top:30px" class="row">


                                <div class="col-md-3">
                                    <b>từ ngày : </b>
                                    <input style="width:250px" type="text" class="form-control" id=""
                                        placeholder="---- ngày ----">
                                </div>
                                <div class="col-md-3">
                                    <b>Đến ngày :</b>
                                    <input style="width:250px" type="text" class="form-control" id=""
                                        placeholder="---- ngày ----">
                                </div>
                                <div class="col-md-3">
                                    <b>Lọc Theo : </b>
                                    <select class="form-control">
                                        <option>Tháng trước </option>
                                    </select>
                                </div>
                                <div style="margin-top:20px" class="col-md-3">
                                    <button type="submit" class="btn btn-info">Lọc</button>
                                </div>

                            </div>

                        </form>
                    </div>

                    <div style="margin-top:300px" class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="text-align:center">Thống kê truy cập </h3>
                            </div>

                            <table style="background-color:black;color:white;text-align:center" class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Đang onlile</th>
                                        <th style="text-align:center">Tổng tháng trước</th>
                                        <th style="text-align:center">Tổng tháng này</th>
                                        <th style="text-align:center">Tổng một năm</th>
                                        <th style="text-align:center">Tổng truy cập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>16</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>25</td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="col-md-4 col-xs-12">
                                <b>Thống kê tổng sản phẩm bài viết đơn hàng </b>
                                
                        </div>

                        <div class="col-md-4">
                            <b>Sản phẩm xem nhiều </b>
                        </div>
                        <div class="col-md-4">
                            <b>Bài viết xem nhiều</b>
                        </div>
                    </div>
                </div>
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

<script>
$(document).ready(function() {
    var colorDanger = "#FF1744";
    Morris.Donut({
        element: 'donut',
        resize: true,
        colors: [
            '#E0F7FA',
            '#B2EBF2',
            '#80DEEA',
            '#4DD0E1',
            '#26C6DA',
            '#00BCD4',
            '#00ACC1',
            '#0097A7',
            '#00838F',
            '#006064'
        ],
        //labelColor:"#cccccc", // text color
        //backgroundColor: '#333333', // border color
        data: [{
                label: "Dato Ej.1",
                value: 123,
                color: colorDanger
            },
            {
                label: "Dato Ej.2",
                value: 369
            },
            {
                label: "Dato Ej.3",
                value: 246
            },
            {
                label: "Dato Ej.4",
                value: 159
            },
            {
                label: "Dato Ej.5",
                value: 357
            }
        ]
    });
});
</script>

@stop