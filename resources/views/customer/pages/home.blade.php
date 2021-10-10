@extends('customer.master')
@section('main')

<div class="hover14 column">
    <figure><img class="container-fluid fluid-1 " src="{{url('fonrtend')}}/images/baner2_03.jpg" alt="" width="100%"
            height="auto"></figure>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="noidungnen wow fadeInDownBig" data-wow-duration="2s">
                        <div class="a3">
                            <span> BRINGING YOU </span>
                            <h1>Inner beauty out</h1>
                            <button type="button" class="btn btn-danger">APPOINTMENT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container container__heo wow bounceInUp" data-wow-duration="5s">
            <div class="row ">
                <div class="col-md-6">
                    <img src="{{url('fonrtend')}}/images/baner3_03.jpg" class="img-fluid" style="width:700px" id="img-1"
                        alt="Responsive image">
                </div>
                <div class="col-md-6 col__text wow bounceInRight" data-wow-duration="5s">
                    <span>A B O U T </span><span style="color: #e09b83;"> E L I A H</span>
                    <h2>When You Look Good,</h2>
                    <h2>You Feel Good</h2><br>
                    <img style="width:200px;margin-left:-50px;margin-top:-20px"
                        src="{{url('fonrtend')}}/images/anhphu1_03.jpg" alt="">
                    <img src="{{url('assets')}}/csscus/images/daunga2.png" alt="">
                    <h6 class="text__codi">The top three occupations in the beauty salons Industry Group are</h6>
                    <h6 class="text__codi">Hairdressers, hairstylists,& cosmetologists, Manicuists and pedi-</h6>
                    <h6 class="text__codi">curists, Receptionists & information clersk, Supervisors of porsonal</h6>
                    <h6 class="text__codi">care and service workers, and Skincare specialists.</h6><br>
                    <button class="botton__32 btn btn-danger">APPOINTMENT </button>
                </div>
            </div>




        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="allple">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 allple1 wow fadeInDownBig" data-wow-duration="2s">
                                <ol>
                                    <li>
                                        <h2>Body Treament</h2>
                                    </li>
                                    <li>
                                        <h2>Professinal makeup</h2>
                                    </li>
                                    <li>
                                        <h2>Maincure & pedicure</h2>
                                    </li>
                                    <li>
                                        <h2>Hair cut & Coloring</h2>
                                    </li>
                                </ol>
                            </div>
                            <div class="col-md-6">
                                <div class="video">
                                    <iframe width="950" height="500" src="{{url('fonrtend')}}/images/quangcao.mp4">
                                    </iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sản phẩm -->
        <div class="tieu">
            <h2>Beauty Product</h2>

        </div>
        <div style="margin-top:20px" class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    
                    @foreach($product as $value)
                    <div style="margin-top:30px;" class=" col-md-4">
                        <div class="xxx card" style="width: 18rem;height:417px">
                            <a href="{{route('customer.detail',$value->id)}}"> <img style="height:310px"
                                    src="{{url('upload')}}/{{$value->image}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <p style="color:#CC33CC" class="card-text">{{$value->name}}</p>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

            </div>
        </div>

        <div class="hiep__1" style="background-color: #F7F6F4;">
            <div class="tieu">
                <h5>T E S T I M I N I A L</h5>
                <h2>What people Say?</h2>
                <img src="{{url('fonrtend')}}/images/anhphu_03.jpg" alt="">
            </div>
            <div class="container wow flipInY" data-wow-duration="2s">
                <div class="row">
                    <div class="col" style="margin-bottom: 20px;">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g1_03.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g2_04.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g3_05.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g4_07.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g5_09.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g6_10.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g7_11.jpg" alt="">
                        <img class="img_1" src="{{url('fonrtend')}}/images/g8_03.jpg" alt="">
                    </div>
                    <div class="col">
                        <h3>Alexxander Ball</h3>
                        <span style="color:red">New York</span>
                        <p>Most of my friends like to stay inside to play video games, read books or watch TV, but I
                            have a good
                            hobby of going outside and playing sports. I play many different sports in my free time;
                            some of
                            them are soccer, swimming, volleyball
                            and basketball. Sometimes I also ride the bikes or do board skating with my cousin in the
                            park. In
                            my opinion, doing sport is one of the rare hobbies that actually have good impacts on me.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hiep__2">
            <div class="tieu">
                <h2>Professional team</h2>
                <img src="{{url('fonrtend')}}/images/anhphu1_03.jpg" alt="">
            </div>
            <div class="container">
                <div style="margin-top:30px" class="row">
                    <div class=" ts col-sm">
                        <div class="card" style="width: 18rem;margin: auto;">
                            <img src="{{url('fonrtend')}}/images/team1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>Danielle Welling</h3>
                                <h5 style="color: #f8c3b1;">Nail master</h5>
                                <p class="card-text">Ipsum dolor ametr, consectetur adip-iscing sedo lacus facilisis.
                                </p>
                                <span class="anhhiep">
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-youtube"></i></li>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ts col-sm">
                        <div class="card" style="width: 18rem;margin: auto;">
                            <img src="{{url('fonrtend')}}/images/team1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>Kristine Froseth</h3>
                                <h5 style="color: #f8c3b1;">Administrator</h5>
                                <p class="card-text">Dolor amet, consectetur adipiscing elit sedo lacus facilisis.</p>
                                <span class="anhhiep">
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-youtube"></i></li>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ts col-sm">
                        <div class="card" style="width: 18rem;margin: auto;">
                            <img src="{{url('fonrtend')}}/images/team1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>Valerie Mahaffey</h3>
                                <h5 style="color: #f8c3b1;">Hair stylist</h5>
                                <p class="card-text">Solor sit amet, consectetur adip-iscing sedo lacus facilisis.</p>
                                <span class="anhhiep">
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-youtube"></i></li>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div style="margin-top:150px" class="container">
                <div class="row flex-center sm-no-flex">

                    <div class="pull-right sm-no-float col-md-8 wow rotateIn" data-wow-duration="2s">
                        <ul class="team-members">
                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="http://gocheckers.com/images/roster/andrew_poturalski_headshot_1718.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- /single member row ends -->

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2015/05/evan-headshot.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="http://gocheckers.com/images/roster/andrew_poturalski_headshot_1718.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2015/12/2015-Dougie-Headshot.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- /single member row ends -->

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2014/12/jeremiah-e1418073411753.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png"
                                            alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- /single member row ends -->

                        </ul><!-- /end team-photos -->
                    </div><!-- /end col-md-8 -->

                    <div class="pull-left col-md-4 sm-text-center wow bounceInLeft" data-wow-duration ="2s">
                        <div class="team-overview">
                            <h2>Who Are We?</h2>
                            <a href="#">Meet the Entire Team</a>
                            <p>
                            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci quae nesciunt
                                officia! Autem, nam eum voluptatem, esse voluptatibus deleniti tempora laboriosam sequi
                                pariatur, explicabo itaque. Fuga, deserunt? Repudiandae, neque qui.</div>
                            </p>
                        </div>
                    </div><!-- /end col-md-4 -->
                </div><!-- /end row -->
            </div><!-- /end container -->
        </section>

        <div class="card card-123  text-white wow fadeInLeft" data-wow-duration="3s">
            <img src="{{url('fonrtend')}}/images/baner5.png" style="height:750px" class="card-img" alt="...">
            <div class="card-img-overlay">
                <div class="card__input">
                    <div class="tieu-1 ">
                        <h2>Book Service</h2>
                        <img src="{{url('fonrtend')}}/images/anhphu1_03.jpg" alt="">
                    </div>
                    <li><input class="form-control" type="text" placeholder="Your name"></li>
                    <li><input class="form-control" type="text" placeholder="Your phone"></li>
                    <li><select class="form-control">
                            <option>Choose a services</option>
                        </select></li>
                    <li><select class="form-control">
                            <option>Choose a date</option>
                        </select></li>
                    <div class="botton-1">
                        <button type="submit" class="btn" data-toggle="button" aria-pressed="false">
                            APPOITMENT
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            dots: false,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        </script>

        @include('sweetalert::alert')


        @stop