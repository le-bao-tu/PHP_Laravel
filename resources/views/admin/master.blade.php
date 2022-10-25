@include('admin.layouts/header')
@include('admin.layouts/siderbar')

yield('title')
@yield('main')

@include('admin.layouts/footer')



  <!-- Left side column. contains the logo and sidebar -->

  <div class="menu -style-3">
      <div class="container">
        <div class="menu__wrapper"><a href="https://avitex.vn/index.html"><img src="assets/images/logo-white.png" alt="Logo"/></a>
              <div class="navigator -white">
                <ul>
                  <li class="relative"><a href="#">Home<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Beauty Salon</a></li>
                      <li><a href="homepage2.html">Makeup Salon</a></li>
                      <li><a href="homepage3.html">Natural Shop</a></li>
                      <li><a href="homepage4.html">Spa Shop</a></li>
                      <li><a href="homepage5.html">Mask Shop</a></li>
                      <li><a href="homepage6.html">Skincare Shop</a></li>
                    </ul>
                  </li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="shop-fullwidth-4col.html">Shop<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu -wide">
                      <ul class="dropdown-menu__col">
                        <li><a href="shop-fullwidth-4col.html">Shop Fullwidth 4 Columns</a></li>
                        <li><a href="shop-fullwidth-5col.html">Shop Fullwidth 5 Columns</a></li>
                        <li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>
                        <li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a></li>
                      </ul>
                      <ul class="dropdown-menu__col">
                        <li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>
                        <li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>
                        <li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>
                        <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                      </ul>
                      <ul class="dropdown-menu__col">
                        <li><a href="product-detail.html">Product Detail</a></li>
                        <li><a href="cart.html">Shopping cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wish list</a></li>
                      </ul>
                      <ul class="dropdown-menu__col -banner"><a href="shop-fullwidth-4col.html"><img src="assets/images/header/dropdown-menu-banner.png" alt="New product banner"/></a></ul>
                    </ul>
                  </li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
              <div class="menu-functions -white"><a class="menu-icon -search" href="#"><img src="assets/images/header/search-icon-white.png" alt="Search icon"/></a>
                <div class="search-box">
                  <form>
                    <input type="text" placeholder="What are you looking for?" name="search"/>
                    <button><img src="assets/images/header/search-icon.png" alt="Search icon"/></button>
                  </form>
                </div><a class="menu-icon -wishlist" href="https://avitex.vn/wishlist.html"><img src="assets/images/header/wishlist-icon-white.png" alt="Wishlist icon"/></a>
                <div class="menu-cart"><a class="menu-icon -cart" href="#"><img src="assets/images/header/cart-icon-white.png" alt="Wishlist icon"/><span class="cart__quantity">0</span></a>
                  <h5>Cart:<span>$100</span></h5>
                </div><a class="menu-icon -navbar" href="#">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div></a>
              </div>
        </div>
      </div>
    </div>
    <div id="content">
          <div class="breadcrumb">
            <div class="container">
              <h2>Checkout</h2>
              <ul><li>Home</li><li>Shop</li><li class="active">Checkout</li></ul>
            </div>
          </div>
      <div class="shop">
        <div class="container">
          <div class="checkout">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-8">
                  <form action="#">
                    <div class="checkout__form">
                      <div class="checkout__form__contact">
                        <div class="checkout__form__contact__title">
                          <h5 class="checkout-title">Contact information</h5>
                          <p> Already have an account?<a href="#">Login</a></p>
                        </div>
                        <div class="input-validator">
                          <input type="text" name="contact" placeholder="Email or mobile phone number"/>
                        </div>
                        <label class="checkbox-label" for="subcribe-news">
                          <input type="checkbox" id="subcribe-news" name="subcribeNews"/>Keep me up to dateon news and exclusive offers
                        </label>
                      </div>
                      <div class="checkout__form__shipping">
                        <h5 class="checkout-title">Shipping address</h5>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="input-validator">
                              <label>First name <span>*</span>
                                <input type="text" name="firstName"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="input-validator">
                              <label>Last name<span>*</span>
                                <input type="text" name="lastName"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-validator">
                              <label>Country<span>*</span>
                                <input type="text" name="country"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-validator">
                              <label>Address <span>*</span>
                                <input type="text" name="streetAddress" placeholder="Steet address"/>
                                <input type="text" name="apartment" placeholder="Apartment, suite, unite ect ( optinal )"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-validator">
                              <label>Town/City <span>*</span>
                                <input type="text" name="town"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-validator">
                              <label>Country/State <span>*</span>
                                <input type="text" name="state"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-validator">
                              <label>Postcode/ZIP <span>*</span>
                                <input type="text" name="zip"/>
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-validator">
                              <label>Order note
                                <input type="text" name="note" placeholder="Note about your order, e.g, special noe for delivery"/>
                              </label>
                            </div>
                          </div>
                          <label class="checkbox-label" for="save">
                            <input id="save" type="checkbox" name="saveInfo"/>Save this infomation for next time
                          </label>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="row">
                    <div class="col-12 col-md-6 col-lg-12 ml-auto">
                      <div class="checkout__total">
                        <h5 class="checkout-title">Your order</h5>
                        <form class="checkout__total__coupon">
                          <h5>Coupon code</h5>
                          <div class="input-validator">
                            <input type="text" placeholder="Your code here" name="coupon"/>
                          </div><a class="btn -dark" href="#">apply</a>
                        </form>
                        <div class="checkout__total__price">
                          <h5>Product</h5>
                          <table>
                            <colgroup>
                              <col style="width: 70%"/>
                              <col style="width: 30%"/>
                            </colgroup>
                            <tbody>
                              <tr>
                                <td><span>01 x </span>The expert mascaraa
                                </td>
                                <td>$35.00</td>
                              </tr>
                              <tr>
                                <td><span>01 x </span>Velvet Melon High Intensity
                                </td>
                                <td>$38.00</td>
                              </tr>
                              <tr>
                                <td><span>01 x </span>Leather shopper bag
                                </td>
                                <td>$35.00</td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="checkout__total__price__total-count">
                            <table>
                              <tbody>
                                <tr>
                                  <td>Subtotal</td>
                                  <td>$108.00</td>
                                </tr>
                                <tr>
                                  <td>Total</td>
                                  <td>$108.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="checkout__total__price__payment">
                            <label class="checkbox-label" for="payment">
                              <input id="payment" type="checkbox" name="payment"/>Cheque payment
                            </label>
                            <label class="checkbox-label" htmlfor="paypal">
                              <input id="paypal" type="checkbox" name="paypal"/>PayPal
                            </label>
                          </div>
                        </div>
                            <button class="btn -red">Place order
                            </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="instagram-two">
        <div class="instagram-two-slider"><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/1.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/2.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/3.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/4.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/5.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/6.png" alt="Instagram image"/></a>
        </div>
      </div>

        <div class="container">
          <div class="footer-one__header">
            <div class="footer-one__header__logo"><a href="https://avitex.vn/homepages/homepage1"><img src="assets/images/logo.png" alt="Logo"/></a></div>
            <div class="footer-one__header__newsletter"><span>Subscribe Newletter:</span>
              <div class="footer-one-newsletter">
                <div class="subscribe-form">
                  <div class="mc-form">
                    <input type="text" placeholder="Enter your email"/>
                          <button class="btn "><i class="fas fa-paper-plane"></i>
                          </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-one__header__social">
                    <div class="social-icons -border">
                      <ul>
                        <li><a href="https://www.facebook.com/" style="'color: undefined'"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/" style="'color: undefined'"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com/" style="'color: undefined'"><i class="fab fa-instagram"> </i></a></li>
                        <li><a href="https://www.youtube.com/" style="'color: undefined'"><i class="fab fa-youtube"></i></a></li>
                      </ul>
                    </div>
            </div>
          </div>
          <div class="footer-one__body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="footer__section -info">
                  <h5 class="footer-title">Contact info</h5>
                  <p>Address:<span>2168 S Archer Ave, Chicago, IL 60616, US</span></p>
                  <p>Phone:<span>+1 312-808-1999</span></p>
                  <p>Email:<span>Beatycosmetics@gmail.com</span></p>
                  <p>Opentime:<span>8.00am - 11.00.pm</span></p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="footer__section -links">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <h5 class="footer-title">Account</h5>
                      <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="https://avitex.vn/cart/">Cart</a></li>
                        <li><a href="fullwidth-4col.html">Shop</a></li>
                        <li><a href="https://avitex.vn/checkout/">Checkout</a></li>
                      </ul>
                    </div>
                    <div class="col-12 col-sm-6">
                      <h5 class="footer-title">Infomation</h5>
                      <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="contact.html">Careers</a></li>
                        <li><a href="contact.html">Delivery Information</a></li>
                        <li><a href="contact.html">Privacy Policy</a></li>
                        <li><a href="contact.html">Terms &amp; Condition</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="footer__section -payment">
                  <h5 class="footer-title">Payment methods</h5>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis.</p>
                  <div class="payment-methods"><img src="assets/images/footer/payment.png" alt="Payment methods"/></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-one__footer">
          <div class="container">
            <div class="footer-one__footer__wrapper">
              <p>© Copyright 2020 Beauty</p>
              <ul>
                <li><a href="contact.html">Privacy Policy</a></li>
                <li><a href="contact.html">Terms &amp; Condition</a></li>
                <li><a href="contact.html">Site map</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="drawer drawer-right slide" id="cart-drawer" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true">
        <div class="drawer-content drawer-content-scrollable" role="document">
          <div class="drawer-body">
            <div class="cart-sidebar">
              <div class="cart-items__wrapper">
                <h2>Shopping cart</h2>
                <div class="cart-item">
                  <div class="cart-item__image"><img src="assets/images/product/1.png" alt="Product image"/></div>
                  <div class="cart-item__info"><a href="https://avitex.vn/product-detail.html">The expert mascaraa</a>
                    <h5>$35.00</h5>
                    <p>Quantity:<span> 1</span></p>
                  </div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>
                </div>
                <div class="cart-item">
                  <div class="cart-item__image"><img src="assets/images/product/3.png" alt="Product image"/></div>
                  <div class="cart-item__info"><a href="https://avitex.vn/product-detail.html">Velvet Melon High Intensity</a>
                    <h5>$38.00</h5>
                    <p>Quantity:<span> 1</span></p>
                  </div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>
                </div>
                <div class="cart-items__total">
                  <div class="cart-items__total__price">
                    <h5>Total</h5><span>$73.00</span>
                  </div>
                  <div class="cart-items__total__buttons"><a class="btn -dark" href="cart.html">View cart</a><a class="btn -red" href="checkout.html">Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="drawer drawer-right slide" id="mobile-menu-drawer" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true">
        <div class="drawer-content drawer-content-scrollable" role="document">
          <div class="drawer-body">
            <div class="cart-sidebar">
              <div class="cart-items__wrapper">
                <div class="navigation-sidebar">
                  <div class="search-box">
                    <form>
                      <input type="text" placeholder="What are you looking for?"/>
                      <button><img src="assets/images/header/search-icon.png" alt="Search icon"/></button>
                    </form>
                  </div>
                  <div class="navigator-mobile">
                    <ul>
                      <li class="relative"><a class="dropdown-menu-controller" href="#">Home<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="homepages/homepage1.html">Beauty Salon</a></li>
                          <li><a href="homepages/homepage2.html">Makeup Salon</a></li>
                          <li><a href="homepages/homepage3.html">Natural Shop</a></li>
                          <li><a href="homepages/homepage4.html">Spa Shop</a></li>
                          <li><a href="homepages/homepage5.html">Mask Shop</a></li>
                          <li><a href="homepages/homepage6.html">Skincare Shop</a></li>
                        </ul>
                      </li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a class="dropdown-menu-controller" href="#">Shop<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                          <ul class="dropdown-menu__col">
                            <li><a href="shop-fullwidth-4col.html">Shop Fullwidth 4 Columns</a></li>
                            <li><a href="shop-fullwidth-5col.html">Shop Fullwidth 5 Columns</a></li>
                            <li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>
                            <li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a></li>
                          </ul>
                          <ul class="dropdown-menu__col">
                            <li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>
                            <li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>
                            <li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>
                            <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                          </ul>
                          <ul class="dropdown-menu__col">
                            <li><a href="#">Product Detail</a></li>
                            <li><a href="cart.html">Shopping cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wish list</a></li>
                          </ul>
                          <ul class="dropdown-menu__col -banner"><a href="shop-fullwidth-4col.html"><img src="assets/images/header/dropdown-menu-banner.png" alt="New product banner.html"/></a></ul>
                        </ul>
                      </li>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </div>
                  <div class="navigation-sidebar__footer">
                    <select class="customed-select -borderless" name="currency">
                      <option value="usd">USD</option>
                      <option value="vnd">VND</option>
                      <option value="yen">YEN</option>
                    </select>
                    <select class="customed-select -borderless" name="currency">
                      <option value="en">EN</option>
                      <option value="vi">VI</option>
                      <option value="jp">JP</option>
                    </select>
                  </div>
                        <div class="social-icons ">
                          <ul>
                            <li><a href="https://www.facebook.com/" style="'color: undefined'"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" style="'color: undefined'"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/" style="'color: undefined'"><i class="fab fa-instagram"> </i></a></li>
                            <li><a href="https://www.youtube.com/" style="'color: undefined'"><i class="fab fa-youtube"></i></a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal" id="quick-view-modal">
        <div class="product-quickview">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="product-detail__slide-one">
                <div class="slider-wrapper">
                  <div class="slider-item"><img src="assets/images/product/1.png" alt="Product image"/></div>
                  <div class="slider-item"><img src="assets/images/product/2.png" alt="Product image"/></div>
                  <div class="slider-item"><img src="assets/images/product/3.png" alt="Product image"/></div>
                  <div class="slider-item"><img src="assets/images/product/4.png" alt="Product image"/></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
                    <div class="product-detail__content">
                      <div class="product-detail__content__header">
                        <h5>eyes</h5>
                        <h2>The expert mascaraa</h2>
                      </div>
                      <div class="product-detail__content__header__comment-block">
                              <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        <p>03 review</p><a href="#">Write a reviews</a>
                      </div>
                      <h3>$35.00</h3>
                      <div class="divider"></div>
                      <div class="product-detail__content__footer">
                        <ul>
                          <li>Brand:gucci
                          </li>
                          <li>Product code: PM 01
                          </li>
                          <li>Reward point: 30
                          </li>
                          <li>Availability: In Stock</li>
                        </ul>
                        <div class="product-detail__colors"><span>Color:</span>
                          <div class="product-detail__colors__item" style="background-color: #8B0000"></div>
                          <div class="product-detail__colors__item" style="background-color: #4169E1"></div>
                        </div>
                        <div class="product-detail__controller">
                                <div class="quantity-controller -border -round">
                                  <div class="quantity-controller__btn -descrease">-</div>
                                  <div class="quantity-controller__number">2</div>
                                  <div class="quantity-controller__btn -increase">+</div>
                                </div>
                                <div class="add-to-cart -dark"><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
                                  <h5>Add to cart</h5>
                                </div>
                          <div class="product-detail__controler__actions"></div><a class="btn -round -white" href="#"><i class="fas fa-heart"></i></a>
                        </div>
                      </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
