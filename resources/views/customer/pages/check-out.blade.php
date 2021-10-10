@extends('customer.master')
@section('main')

<div class="nen">
    <div class="noidung"></div>
    <div class="col-md-6 offset-md-3"></div>
    <h3 style="color:#66410c ;font-size: 40px;">CHECK || OUT</h3>
    <span style="color:white">home \\ <span style="color:red">Product \\ Check-out</span></span>
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
<div style="margin-top:50px;margin-bottom:150px" class="container">
    @if(!Auth::check())
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-primary" role="alert">
                <span><i class="fas fa-user"></i> Please login to purchase<a style="margin-left:10px"
                        href="{{route('customer.logen')}}?page=check_out"><b>Click
                            login</b></a></span>
            </div>
            <div style="border-bottom:4px solid #EEEEEE;margin-top:30px">
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-primary" role="alert">
                <span><i class="fas fa-thumbtack"></i> Information line</span>
            </div>
            <div style="border-bottom:4px solid #EEEEEE;margin-top:30px">
            </div>
        </div>
    </div>
    @else

    <form action="" method="post">
        @csrf
        <div style="margin-top:70px;background-color:#f7f5f4" style="margin-bottom:150px" class="row">
            <div class="col-md-6">
                <h4 style="margin-top:20px"><b>Billing Detail</b></h4>
                <div class="form-group">
                    <input style="color:red" type="text" name="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="full name . . . " value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <input style="color:red" type="email" name="email" class="form-control"
                        id="exampleFormControlInput1" placeholder="email . . . " value="{{Auth::user()->email}}">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1"
                        placeholder="phone . . . ">
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" id="exampleFormControlInput1"
                        placeholder="Address . . . ">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="note" rows="5" id="comment"
                        placeholder="Order note . . ."></textarea>
                </div>
            </div>

            <div style="background-color:#f7f5f4;height:600px" class="col-md-6">

                <div>
                    <h4 style="margin-top:20px"><b>Your Orders</b></h4>
                </div>


                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cart->content() as $value)
                        <tr>
                            <td>{{ $value['name']}} <b>x{{$value['quantity']}}</b></td>
                            <td style="color:burlywood"> {{ $value['price'] * $value['quantity']}} $</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td><b>Total</b></td>
                            <td style="color:red"><b>{{$cart->get_total_price()}} $ </b></td>
                        </tr>

                    </tbody>

                </table>
                <div>
                    <h4 style="margin-top:20px"><b>Payment</b></h4>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        <b> Direct Bank Transfer</b>
                        <div>
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore eius voluptatibus
                                voluptatum suscipit nisi dignissimos illo provident, laudantium aliquid porro sed
                                molestiae
                                quis iure atque eveniet earum repellat hic laborum.</span>
                    </label>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                    checked>
                <label class="form-check-label" for="exampleRadios1">
                    <b>Check Payment</b>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                    checked>
                <label class="form-check-label" for="exampleRadios1">
                    <b>Paypal</b>
                </label>
            </div>
            <div style="text-align:center">
                <button style="submit" class="btn btn-info">Place Order</button>
            </div>
        </div>
    </form>
</div>

@endif
</div>






@stop