@extends('customer.master')
@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="nen">
            <div class="noidung"></div>
            <div class="col-md-6 offset-md-3"></div>
            <h3 style="color:#66410c ;font-size: 40px;font-weight:600">CONTACT </h3>
            <span style="color:white">home \\ <span style="color:red">Contact</span></span>
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
    </div>
    </div>
    <div class="container mt-3" style="width: 1000px; padding: 120px 0">
        <div class="row">
            <div class="col-md-5">
                <H1>Contact info</H1>
                <div class="media mt-5">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{url('fonrtend')}}/images/icon1.png" class="mr-3" width="40px" alt="...">
                        </div>
                        <div class="col-9 ml-1 ">
                            <div class="media-body">
                                <h5 class="mt-0">Address</h5>
                                <p class="mb-0">286 S Archer Ave, Chicago,IL60616</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media mt-4">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{url('fonrtend')}}/images/icon2.png" class="mr-3" width="40px" alt="...">
                        </div>
                        <div class="col-9  ml-3 mt-2">
                            <div class="media-body">
                                <h5 class="mt-0">Phone</h5>
                                <p class="mb-0">+1 233-688-8999</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media mt-4">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{url('fonrtend')}}/images/icon3.png" class="mr-3" width="40px" alt="...">
                        </div>
                        <div class="col-9 ml-3 mt-2">
                            <div class="media-body">
                                <h5 class="mt-0">Email</h5>
                                <p class="mb-0">Bocphetso1@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media mt-4">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{url('fonrtend')}}/images/icon4.png" class="mr-3" width="40px" alt="...">
                        </div>
                        <div class="col-9 ml-3 mt-2">
                            <div class="media-body">
                                <h5 class="mt-0">Opentime</h5>
                                <p class="mb-0">Sun-Sat: 8.00am-9.00pm</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-7">
                <H1>Send Us A Message</H1>
                @if(!Auth::check())
                <div class="alert alert-primary" role="alert">
                    <span><i class="fas fa-user"></i> Please login to purchase<a style="margin-left:10px"
                            href="{{route('customer.logen')}}"><b>Click
                                login</b></a></span>
                </div>
                @else
                <form  action="{{route('customer.post.contact')}}" method="post">
                    @csrf
                   <div style="margin: 20px 0; line-height: 35px">
                    <div class="form-group">
                            <label for="formGroupExampleInput"></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="name"
                                placeholder="Name" value="{{Auth::user()->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"></label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email"
                                name="email" value="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="How Can We Help ? " rows="3"
                                name="note"></textarea>
                        </div>
                        <input type="hidden" name="users_id" id="" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn btn-outline-dark mt-3" style="width: 100%;">Send Message</button>
                   </div>

                </form>
                @endif
            </div>
        </div>

     </div>

</div>
<div style="width:100%" class="container">
        <div class="row">
            <iframe class="mt-5"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.657600813901!2d105.7812622147636!3d21.0463819859888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3b4220c2bd%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1626620348034!5m2!1svi!2s"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- kết -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="c1">
                    <img src="{{url('fonrtend')}}/images/detail1_02.jpg" alt="" style="width:230px">
                    <img src="{{url('fonrtend')}}/images/detail2_03.jpg" alt="" style="width:230px">
                    <img src="{{url('fonrtend')}}/images/detail4_04.jpg" alt="" style="width:230px">
                    <img src="{{url('fonrtend')}}/images/detail5_05.jpg" alt="" style="width:230px">
                    <img src="{{url('fonrtend')}}/images/detail6_06.jpg" alt="" style="width:230px">
                    <img src="{{url('fonrtend')}}/images/detail7_07.jpg" alt="" style="width:230px">
                </div>

            </div>
        </div>
    </div>
    @stop
