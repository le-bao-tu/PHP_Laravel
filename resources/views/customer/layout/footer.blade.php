<div class="foot">
    <div class="foot-1">
        <div class="container container-1">
            <div class="row">
                <div style="margin-top:-10px" class="col">
                    <img src="{{url('fonrtend')}}/images/logo.png" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-6">
                    <form class="form-inline">
                        <span>Subscribe Newletter </span>
                        <input style="margin-left:10px" class="form-control mr-sm-2" placeholder="Your email">

                        <button class="btn btn-dark 1 my-2 my-sm-0"><i class="far fa-paper-plane"></i></button>
                    </form>
                </div>

                <div class="col">
                    <div class="icon">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="list-style: none;">
                <div class="col">
                    <h4>Contact info</h4>
                    <li>Address:2186 S Archer Ave. Chicago, IL60616,US</li>
                    <li>Phone: + 1 312-808-1999</li>
                    <li>Email:Beatycosmetics@gmail.com</li>
                    <li>Opentime:8.00am-11.00pm</li>
                </div>
                <div class="col">
                    <h4>Account</h4>
                    <li>My account</li>
                    <li>Wishlist</li>
                    <li>Cart</li>
                    <li>Shop</li>
                    <li>Checkout</li>
                </div>
                <div class="col">
                    <h4>Infomation</h4>
                    <li>About</li>
                    <li>Careers</li>
                    <li>Delivery information</li>
                    <li>Privacy Policy</li>
                    <li>Terms & Con dition</li>
                </div>
                <div class="col">
                    <h4>Payment methodss</h4>
                    <span>Loerm ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis</span>
                    <div class="atm">
                        <li>
                            <a href=""><img src="{{url('fonrtend')}}/images/logo2.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="{{url('fonrtend')}}/images/logo3.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="{{url('fonrtend')}}/images/logo4.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="{{url('fonrtend')}}/images/logo5.png" alt=""></a>
                        </li>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class=" container-3">
    <li><i class="far fa-copyright">Copyright 2020 Beauty</i></li>
    <li>
        <p>Privacy | Terms & Conditions | Site Map</p>
    </li>
</div>
</body>
<script src="/jquery/jquery-3.5.1.min.js"></script>

<script src="/bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>
<script src="home.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  



<script type="text/javascript">
    $(document).ready(function() {

        $('#sort').on('change', function() {

        var url = $(this).val();
        
        if (url) {
            window.location = url;
        }
        return false;
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#shop').on('change', function() {

        var url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });
});
</script>





<script type="text/javascript">
    $(document).ready(function() {

        $('#price').on('change', function() {

        var url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });
});

</script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#prices').on('change', function() {

        var url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });
});

</script>





</html>