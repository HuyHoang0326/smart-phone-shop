@extends('client.layout')
@section('content')
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/antomi/antomi/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:27 GMT -->
<body>

    <!--header area start-->
   
    <!--header area end-->

    <!--about bg area start-->
    <div class="about_bg_area">
        <div class="container">
            <!--about section area -->
            <section class="about_section mb-60">
                <div class="row align-items-center">
                    <div class="col-12">
                        <figure>
                            <div class="about_thumb">
                                <img src="{{ asset('img/about/about1.jpg') }}" alt="">
                            </div>
                            <figcaption class="about_content">
                                <h1>We are a digital agency focused on delivering content and utility user-experiences.</h1>
                                <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                                <div class="about_signature">
                                    <img src="{{ asset('img/about/about-us-signature.png') }}" alt="">
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <!--about section end-->

            <!--chose us area start-->
            <div class="choseus_area" data-bgimg="{{ asset('img/about/about-us-policy-bg.jpg') }}">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_chose">
                            <div class="chose_icone">
                                <img src="{{ asset('img/about/About_icon1.png') }}" alt="">
                            </div>
                            <div class="chose_content">
                                <h3>Creative Design</h3>
                                <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_chose">
                            <div class="chose_icone">
                                <img src="{{ asset('img/about/About_icon2.png') }}" alt="">
                            </div>
                            <div class="chose_content">
                                <h3>100% Money Back Guarantee</h3>
                                <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_chose">
                            <div class="chose_icone">
                                <img src="{{ asset('img/about/About_icon3.png') }}" alt="">
                            </div>
                            <div class="chose_content">
                                <h3>Online Support 24/7</h3>
                                <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--chose us area end-->

            <!--services img area-->
            <div class="about_gallery_section mb-55">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('img/about/about2.jpg') }}" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>What do we do?</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('img/about/about3.jpg') }}" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Mission</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('img/about/about4.jpg') }}" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>History Of Us</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
            <!--services img end-->

            <!--testimonial area start-->
            <div class="faq-client-say-area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="section_title">
                            <h2>What can we do for you ?</h2>
                        </div>
                        <div class="faq-style-wrap" id="faq-five">
                            <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a id="octagon" class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse1" aria-expanded="true" aria-controls="faq-collapse1"> <span class="button-faq"></span>Fast Free Delivery</a>
                                </h5>
                            </div>
                            <div id="faq-collapse1" class="collapse show" aria-expanded="true" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse2" aria-expanded="false" aria-controls="faq-collapse2"> <span class="button-faq"></span>More Than 30 Years In The Business</a>
                                </h5>
                            </div>
                            <div id="faq-collapse2" class="collapse" aria-expanded="false" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse3" aria-expanded="false" aria-controls="faq-collapse3"> <span class="button-faq"></span>100% Organic Foods</a>
                                </h5>
                            </div>
                            <div id="faq-collapse3" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse4" aria-expanded="false" aria-controls="faq-collapse4"> <span class="button-faq"></span>Best Shopping Strategies</a>
                                </h5>
                            </div>
                            <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>Nam liber tempor cum soluta nobis eleifend option.</p>
                                    <p>Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.
                                    </p>
                                    <p> Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-area">
                            <div class="section_title">
                                <h2>What Our Customers Says ?</h2>
                            </div>
                            <div class="testimonial-two owl-carousel">
                                <div class="testimonial-wrap-two text-center">
                                    <div class="quote-container">
                                        <div class="quote-image">
                                            <img src="{{ asset('img/about/testimonial1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonials-text">
                                            <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                        </div>
                                        <div class="author">
                                            <h6>Kathy Young</h6>
                                            <p>CEO of SunPark</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="testimonial-wrap-two text-center">
                                    <div class="quote-container">
                                        <div class="quote-image">
                                            <img src="{{ asset('img/about/testimonial2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonials-text">
                                            <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                        </div>
                                        <div class="author">
                                            <h6>Kathy Young</h6>
                                            <p>CEO of SunPark</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-wrap-two text-center">
                                    <div class="quote-container">
                                        <div class="quote-image">
                                            <img src="{{ asset('img/about/testimonial3.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonials-text">
                                            <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                        </div>
                                        <div class="author">
                                            <h6>Kathy Young</h6>
                                            <p>CEO of SunPark</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--testimonial area end-->
        </div>
    </div>
    <!--about bg area end-->

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




</body>


<!-- Mirrored from htmldemo.net/antomi/antomi/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:29 GMT -->
</html>
@endsection