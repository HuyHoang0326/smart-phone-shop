@extends('client.layout');
@section('content');
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/antomi/antomi/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:22 GMT -->


<body>
               

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--wishlist area start -->
    <div class="wishlist_page_bg">
        <div class="container">
            <div class="wishlist_area">
                <div class="wishlist_inner">
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc wishlist">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product_quantity">Stock Status</th>
                                                    <th class="product_total">Add To Cart</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product_remove"><a href="#">X</a></td>
                                                    <td class="product_thumb"><a href="#"><img src="{{ asset('img/s-product/product.jpg') }}" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                    <td class="product-price">£65.00</td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="#">Add To Cart</a></td>


                                                </tr>

                                                <tr>
                                                    <td class="product_remove"><a href="#">X</a></td>
                                                    <td class="product_thumb"><a href="#"><img src="{{ asset('img/s-product/product2.jpg') }}" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbags justo</a></td>
                                                    <td class="product-price">£90.00</td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="#">Add To Cart</a></td>


                                                </tr>
                                                <tr>
                                                    <td class="product_remove"><a href="#">X</a></td>
                                                    <td class="product_thumb"><a href="#"><img src="{{ asset('img/s-product/product3.jpg') }}" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag elit</a></td>
                                                    <td class="product-price">£80.00</td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="#">Add To Cart</a></td>


                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wishlist_share">
                            <h4>Share on:</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--wishlist area end -->

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
                                    <a href="#"><img src="{{ asset('img/icon/icon-appstore.png') }}" alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img src="{{ asset('img/icon/icon-googleplay.png') }}" alt=""></a>
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
                                        <img src="{{ asset('img/icon/icon-phone.png') }}" alt="">
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
                            <img src="{{ asset('img/icon/payment.png') }}" alt="">
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




</body>


<!-- Mirrored from htmldemo.net/antomi/antomi/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:22 GMT -->
</html>
@endsection