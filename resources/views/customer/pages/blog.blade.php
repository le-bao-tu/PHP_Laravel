@extends('customer.master')
@section('main')
<div id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="nen">
                <div class="noidung"></div>
                <div class="col-md-6 offset-md-3"></div>
                <h3 style="color:#66410c ;font-size: 40px;">BLOG </h3>
                <span style="color:white">home \\ <span style="color:red">Blog</span></span>
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
    <div class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="blog-sidebar__section-search">
                            <form action="">
                                <input type="text" placeholder="Bạn muốn tìm gì" name="search">

                            </form>
                        </div>
                        <div class="blog-sidebar__section mt-3">
                            <h5 class="blog-sidebar__title">Follow Me</h5>
                            <div class="col">
                                <div class="icon">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-youtube"></i>
                                </div>

                            </div>
                        </div>
                        <div class="blog-sidebar__section-categories">
                            <h5 class="blog-sidebar__title">Categories</h5>
                            <ul>
                                @foreach($blog as $value)
                                <li><a href="{{route('customer.blog.id',$value->id)}}">{{$value->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog-sidebar__section-polular-post">
                            <h5 class="blog-sidebar__title">Popular Post</h5>

                            @foreach($blog_cate as $value)
                            <div class="post-card-three">
                                <div class="post-card-three__image">
                                    <img src="{{url('upload')}}/{{$value->image}}" alt="">
                                </div>
                                <div class="post-card-three__content">
                                    <a href="#">{{$value->name}}</a>
                                    <p>2020-12-30</p>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <div class="blog-sidebar__section-newsletter">
                            <h5 class="blog-sidebar__title">News Letter</h5>
                            <p>Subscribe to our newsletter a nd get our newest updates right on your inbox.</p>
                            <div class="subscribe-form blog-sidebar-newsletter">
                                <form action="" class="mc-form">
                                    <input class="email" id="mc-form-email" type="email" placeholder="Enter your email">
                                    <label for="agree">
                                        <input id="agree" type="checkbox" name="agree">
                                        "I agree to the terms & conditions"
                                    </label>
                                    <button class="button">Subcribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="blog-content">
                        <div class="row">

                            @foreach($blog_cate as $value)
                            <div class="col-12 col-md-6">
                                <div class="post-card-two">
                                    <div class="post-card-two__image">
                                        <img src="{{url('upload')}}/{{$value->image}}" alt="">
                                        <div class="post-card-two__info">
                                            <div class="post-card-two__info__date">
                                                <h5>05</h5>
                                                <p>Feb</p>
                                            </div>
                                            <div class="post-card-two__info__detail">
                                                <p>by <span>Everlyn Tucker Make Up</span>   </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-card-two__content">
                                        <a href="">{{$value->name}}</a>
                                        <p>{{$value->note}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="instagram-two">
            <div class="instagram-two-slider slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 4590px; transform: translate3d(-2700px, 0px, 0px);">
                        <a href="slider-item slick-slide slick-cloned" style="width: 270px;" data-slick-index="-4" id aria-hidden>
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
</div>
@stop