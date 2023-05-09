<!doctype html>
<html class="no-js" lang="en">

@php
    $objUser = Auth::user();
@endphp
<!-- Mirrored from htmldemo.net/antomi/antomi/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHP3 Shop Smart Phone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/client_layouts.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-webfont3e6e.eot?v=4.7.0')}})">

</head>
<body>
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="antomi_message">
                            <p>Get free shipping – Free 30 day money back guarantee</p>
                        </div>
                        <div class="header_top_settings text-right">
                            <ul>
                                <li><a href="#">Store Locations</a></li>
                                <li><a href="#">Track Your Order</a></li>
                                <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                                <li>Quality Guarantee Of Products</li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                                <li><a href="product-countdown.html">product countdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="{{ route('contact') }}">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('contact') }}"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    <!--header area start-->
    <header>
        <div class="main_header">
            <div class="container">
                <!--header top start-->
                <div class="header_top">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="antomi_message">
                                <p>Get free shipping – Free 30 day money back guarantee</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="header_top_settings text-right">
                                <ul>
                                    <li><a href="#">Store Locations</a></li>
                                    <li><a href="#">Track Your Order</a></li>
                                    <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                                    <li>Quality Guarantee Of Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header top start-->
                <!--header middel start-->
                <div class="header_middle sticky-header">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="main_menu menu_position text-center">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="{{ route('home') }}">Home<i class="fa fa-angle-down"></i></a></li>
                                        <li class="mega_items"><a href="{{ route('shop') }}">Shop<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="{{ route('blog') }}">Blog<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('contact') }}"> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-7 col-6">
                            <div class="header_configure_area">
                                <div class="header_wishlist">
                                    <a href="{{ route('my-account') }}">
                                        <img src="/img/1946429.png" class="img-circle" alt="User Image" width="25px">
                                    </a>
                                    <p>
                                        @isset($objUser->name)
                                            {{ $objUser->name }}
                                        @endisset
                                    </p>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span class="cart_price"><i class="ion-ios-arrow-down"></i></span>
                                        <span class="cart_count">0</span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->
                 
                 <!--mini cart-->
                <div class="mini_cart">
                    <div class="cart_close">
                        <div class="cart_text">
                            <h3>cart</h3>
                        </div>
                        <div class="mini_cart_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div id="cartList">

                    </div>
                    <div class="mini_cart_footer">
                        <div class="cart_button">
                            <a href="{{ route('route_Frontend_Cart') }}">View cart</a>
                        </div>
                        <div class="cart_button">
                            <a class="active" href="{{ route('route_Frontend_Checkout') }}">Checkout</a>
                        </div>

                    </div>
                </div>
                <!--mini cart end-->

                <!--header bottom satrt-->
                @yield('header_bottom')
                <!--header bottom end-->
            </div>
        </div>
    </header>
    
@yield('content');
</html>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>