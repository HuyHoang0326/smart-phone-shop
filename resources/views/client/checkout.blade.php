@extends('client.layout')
@section('content')
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/antomi/antomi/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:22 GMT -->

<body>

    <!--Offcanvas menu area start-->
    <!--Offcanvas menu area end-->
    <!--header area start-->
   
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section">
                <div class="row">
                    <div class="col-12">
                        <div class="user-actions">
                            <h3> 
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#checkout_login" data-bs-toggle="collapse" aria-expanded="true">Click here to login</a>     
    
                            </h3>
                             <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>  
                                    <form action="#">  
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">     
                                        </div>
                                        <div class="form_group">
                                            <label>Password  <span>*</span></label>
                                            <input type="text">     
                                        </div> 
                                        <div class="form_group group_3 ">
                                            <button type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>     
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>          
                                </div>
                            </div>    
                        </div>
                        <div class="user-actions">
                            <h3> 
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse"  aria-expanded="true">Click here to enter your code</a>     
    
                            </h3>
                             <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                <div class="checkout_info coupon_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>    
                        </div>    
                   </div>
                </div>
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_left">
                                <form action="#">
                                    <h3>Billing Details</h3>
                                    <div class="row">

                                        <div class="col-lg-6 mb-20">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Last Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="country">country <span>*</span></label>
                                            <select class="niceselect_option" name="cuntry" id="country">
                                                <option value="2">bangladesh</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>

                                            </select>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Street address <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Town / City <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone<span>*</span></label>
                                            <input type="text">

                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label> Email Address <span>*</span></label>
                                            <input type="text">

                                        </div>
                                        <div class="col-12 mb-20">
                                            <input id="account" type="checkbox" data-target="createp_account" />
                                            <label for="account" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                            <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <label> Account password <span>*</span></label>
                                                    <input placeholder="password" type="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input id="address" type="checkbox" data-target="createp_account" />
                                            <label class="righ_0" for="address" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                            <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-20">
                                                        <label>First Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-lg-6 mb-20">
                                                        <label>Last Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>Company Name</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <div class="select_form_select">
                                                            <label for="countru_name">country <span>*</span></label>
                                                            <select class="niceselect_option" name="cuntry" id="countru_name">
                                                                <option value="2">bangladesh</option>
                                                                <option value="3">Algeria</option>
                                                                <option value="4">Afghanistan</option>
                                                                <option value="5">Ghana</option>
                                                                <option value="6">Albania</option>
                                                                <option value="7">Bahrain</option>
                                                                <option value="8">Colombia</option>
                                                                <option value="9">Dominican Republic</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-20">
                                                        <label>Street address <span>*</span></label>
                                                        <input placeholder="House number and street name" type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>Town / City <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>State / County <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-lg-6 mb-20">
                                                        <label>Phone<span>*</span></label>
                                                        <input type="text">

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label> Email Address <span>*</span></label>
                                                        <input type="text">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Order Notes</label>
                                                <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_right">
                                <form action="#">
                                    <h3>Your order</h3>
                                    <div class="order_table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Handbag fringilla <strong> × 2</strong></td>
                                                    <td> $165.00</td>
                                                </tr>
                                                <tr>
                                                    <td> Handbag justo <strong> × 2</strong></td>
                                                    <td> $50.00</td>
                                                </tr>
                                                <tr>
                                                    <td> Handbag elit <strong> × 2</strong></td>
                                                    <td> $50.00</td>
                                                </tr>
                                                <tr>
                                                    <td> Handbag Rutrum <strong> × 1</strong></td>
                                                    <td> $50.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Cart Subtotal</th>
                                                    <td>$215.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td><strong>$5.00</strong></td>
                                                </tr>
                                                <tr class="order_total">
                                                    <th>Order Total</th>
                                                    <td><strong>$220.00</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment_method">
                                        <div class="panel-default">
                                            <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Create an account?</label>

                                            <div id="method" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-default">
                                            <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                            <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_button">
                                            <button type="submit">Proceed to PayPal</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Checkout page section end-->

    <!--footer area start-->
    <footer class="footer_widgets">
        <!--newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="newsletter_sing_up">
                                <h3>Newsletter Sign Up</h3>
                                <p>(Get <span>30% OFF</span> coupon today subscibers)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="subscribe_content">
                                <p><strong>Join 226.000+ subscribers</strong> and get a new discount coupon on every Monday.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter area end-->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="widgets_container contact_us">
                            <h3>GET THE APP</h3>
                            <div class="aff_content">
                                <p><strong>ANTOMI</strong> App is now available on Google Play & App Store. Get it now.</p>
                            </div>
                            <div class="app_img">
                                <figure class="app_img">
                                    <a href="#"><img src="assets/img/icon/icon-appstore.png" alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img src="assets/img/icon/icon-googleplay.png" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">International Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="widgets_container">
                            <h3>CONTACT INFO</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="assets/img/icon/icon-phone.png" alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>Hotline Free 24/24: <br> <strong>0123456789</strong></p>
                                    </div>
                                </div>
                                <p>Your address goes here. <br> demo@example.com</p>
                            </div>

                            <div class="footer_social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>&copy; 2021 <a href="index.html" class="text-uppercase">ANTOMI</a>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com/">HasThemes</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <img src="assets/img/icon/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->
    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>


<!-- Mirrored from htmldemo.net/antomi/antomi/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:22 GMT -->
</html>
@endsection