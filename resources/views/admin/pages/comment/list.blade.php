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
                <div class="col-md-12">

                    <legend>DANH SÁCH BÌNH LUẬN </legend>

                    <div class="">
                        <label for="">Tìm kiếm bình luận </label>
                        <input style="width:200px" class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>
                    <table style="background-color:#;text-align:center;margin-top:30px" border="1px" class="table">
                        <thead>
                            <tr>
                                <th style="text-align:center">STT</th>
                                <th style="text-align:center">User_ID</th>
                                <th style="text-align:center">Product_ID</th>
                                <th style="text-align:center">Question</th>
                                <th style="text-align:center">Answer</th>
                                <th style="text-align:center">Status</th>
                                <th style="text-align:center">Remove</th>

                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($comment as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value->user_id($value->id)->name}}</td>
                                <td>{{$value['product_id']}}</td>
                                <td>{{$value->question}}</td>
                                <td>{{$value->answer}}</td>

                                @if($value->status == 0)
                                <td style="text-align:center"><span style="background-color:red"
                                        class="badge badge-danger">Chưa xử lí</span></td>
                                @elseif ($value->status == 1)
                                <td style="text-align:center"><span style="background-color:#00a65a"
                                        class="label right badge badge-success">Đã Duyệt</span></td>
                                @endif
                                <td style="text-align:center">
                                    <a title="xem chi tiết" href="{{route('comments_detail',$value->id)}}"
                                        class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a title="xóa " href="{{route('delete_comments',$value->id)}}"
                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <nav aria-label="Page navigation example">

                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        @for($i=1;$i<=$comment->lastPage();$i++)
                            <li class="page-item {{($i== $comment->currentPage())? 'active' : ''}}"><a class="page-link"
                                    href="?page={{$i}}">{{$i}}</a></li>
                            @endfor
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>

                </nav>

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