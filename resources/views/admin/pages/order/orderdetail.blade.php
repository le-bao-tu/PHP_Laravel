@extends('admin.master')
@section('title','OrderDetail')

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
            <div style="text-align:center;background-color:#CC33CC" class="list-group">
                    <span class="list-group-item list-group-item-action active">
                        TH??NG TIN KH??CH H??NG 
                    </span>
                    </div>
                    <hr>
                <div style="height:300px;background-color:#b8c7ce;font-size:15px;line-height:25px" class="col-md-12">
                    <span>T??n Kh??ch H??ng : {{Auth::user()->name}}</span>
                    <div>S??? ??i???n Tho???i : {{$Order['phone']}}</div>
                    <div>Adresse : {{$Order['address']}}</div>
                    <div>Description : {{$Order['note']}}</div>
                    <div>careated_at : {{$Order['created_at']}}</div>
                    <div>Order status :

                        @if($Order['status']==0)
                        <span style="background-color:red" class="badge badge-danger">ch??a x??? l??</span>
                        @elseif ($Order['status']==1)
                        <span style="background-color:#FFFF66"  class="label right badge badge-success">??ang x??? l?? </span>
                        @elseif ($Order['status']==2)
                        <span style="background-color:#00FF33"  class="label right badge badge-success">??ang giao h??ng </span>
                        @elseif ($Order['status']==3)
                        <span style="background-color:#00FFFF"  class="label right badge badge-success">Giao h??ng th??nh c??ng </span>
                        @else
                        <span style="background-color:#CC00CC"  class="label right badge badge-success">H???y ????n </span>
                        @endif
                    </div>

                    <form style="margin-top:15px"action="{{route('update',$Order->id)}}" method="POST" class="form-inline" role="form">
                        @csrf
                        <div class="form-group">
                            <select style="width:250px" name="status"  class="form-control"
                                required="required">
                                <option>---- Ch???n ----</option>
                                <option value="0">Ch??a x??? l??</option>
                                <option value="1">??ang x??? l??</option>
                                <option value="2">??ang giao H??ng</option>
                                <option value="3">Giao h??ng th??nh c??ng</option>
                                <option value="4">H???y ????n</option>
                            </select>
                            <button type="submit" class="btn btn-warning">C???p Nh???t</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div style="text-align:center" class="list-group">
                    <span href="#" class="list-group-item list-group-item-action active">
                        DANH S??CH ????N H??NG
                    </span>
                    <table border="1px" class="table">
                        <thead>
                            <tr>
                                <th style="text-align:center">M?? SP</th>
                                <th style="text-align:center">T??n S???n Ph???m</th>
                                <th style="text-align:center">Image</th>
                                <th style="text-align:center">Quantity</th>
                                <th style="text-align:center">Price</th>
                                <th style="text-align:center">Color</th>
                                <th style="text-align:center">Total</th>
                              
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $value)
                            <tr>
                                <td style="text-align:center">{{$value['id']}}</td>
                                <td style="text-align:center">{{$value->product->name}}</td>
                                <td style="text-align:center"><img src="{{url('upload')}}/{{$value->product->image}}" alt="" style="width:100px"></td>
                                <td style="text-align:center">{{$value['quantity']}}</td>
                                <td style="text-align:center">{{$value['price']}}</td>
                                <td style="text-align:center">{{$value->color->name}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td style="color:white;text-align:center;background-color:#CC33CC" colspan="6" class="bg-danger">T???ng Ti???n</td>
                                <td style="text-align:center;color:red"><b> {{($value['price'] * $value['quantity'])}} $</b></td>
                            </tr>
                   
                        </tbody>
                    </table>
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