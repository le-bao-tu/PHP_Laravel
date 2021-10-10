@extends('customer.master')
@section('main')

<div class="nen">
    <div class="noidung"></div>
    <div class="col-md-6 offset-md-3"></div>
    <h3 style="color:#66410c ;font-size: 40px;">SHOW || CART</h3>
    <span style="color:white">home \\ <span style="color:red">  Show - Cart </span></span>
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

<div style="margin-top:50px" class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('update_cart')}}" method="post">
                @csrf
                <table  border="1px" class="table">
                    <thead>
                        <tr>
                            <th style="text-align:center">MASP</th>
                            <th style="text-align:center">Name</th>
                            <th style="text-align:center">Image</th>
                            <th style="text-align:center">Price</th>
                            <th style="text-align:center">Quantity</th>
                            <th style="text-align:center">Color</th>
                            <th style="text-align:center">Total</th>
                            <th style="text-align:center">Remove</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($cart->content() as $key => $value)
                        <input type="hidden" name="key[]" value="{{$key}}">

                        <tr>
                            <td style="text-align:center">{{$loop->index + 1}}</td>
                            <td style="text-align:center">{{$value['name']}}</td>
                            <td style="text-align:center"><img src="{{url('upload')}}/{{$value['image']}}" alt=""
                                    style="width:100px"></td>
                            <td style="text-align:center"><b>{{number_format($value['price'])}} $</b></td>


                            <td>

                                <input style=";text-align:center"  type="text" class="form-control" value="{{$value['quantity']}}"
                                    name="quantity[]">

                            </td>


                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="attr[]" id="">
                                        @foreach($value['product']->getColorById($value['id']) as $color)
                                        <option value="{{$color->color_id}}"
                                            {{($color->color_id == $value['attr'])?'selected':''}}>{{$color->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>


                            <td style="text-align:center"> <b> {{number_format($value['quantity'] * $value['price'])}}
                                    $</b></td>

                            <td style="text-align:center"> <a title="xóa" href="{{route('delete_sp',$key)}}"
                                    class="btn btn-danger"><i class="far fa-trash-alt"></i></a> </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td style="text-align:center;background-color:#f7f5f4" colspan="6"><b>Tổng Tiền</b></td>

                            <td style="text-align:center;color:red"><b>{{number_format($cart->get_total_price())}} $
                                </b></td>
                            <td style="text-align:center"> <button class="btn btn-warning" type="submit">Update Cart </button> </td>
                        </tr>
                    </tbody>

                   
                </table>
                
                @if(Auth::check())
                <div class="btn btn-danger">
                        <a style="text-decoration:none;color:white" href="{{route('check_out')}}">Check Out</a>
                    </div>
                    @endif
            </form>

        </div>

    </div>
</div>



@include('sweetalert::alert')

@stop