<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lifeseed Worldwide">
    <title>Walnut Healthcare Ltd: Staying Healthy and Wealthy Always.</title>
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('backassets//vendors/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- start page-wrapper -->

<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->

    <header id="header" class="wpo-site-header wpo-header-style-3">
        <div class="topbar">
            <div class="container">
                <div class="row">
{{--                    <div class="col col-md-5 col-sm-7 col-12">--}}
{{--                        <div class="contact-intro">--}}
{{--                            <ul>--}}
{{--                                <li><i class="fi flaticon-call"></i>+234 803 410 8410</li>--}}
{{--                                <li><i class="fi flaticon-envelope"></i>info@walnuthealthcare.com</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="col col-md-4 col-sm-5 col-12">--}}
{{--                        @include('scripts.countdown')--}}
{{--                    </div>--}}
                    <div class="col col-md-3 col-sm-12">
                        <div class="contact-info">
                            <ul class="pull-left">
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                                {{--                                <li><a class="theme-btn" href="#!">Purchase</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end topbar -->
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="max-width: 130px; padding:0px;
                        margin-top:15px;
                        margin-left:15px;"
                       class="navbar-brand"
                       href="{{url('/')}}">
                        <img src="{{asset('assets/images/logo-2.png')}}" alt="logo">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{route('compensation')}}">Marketing Plan</a>
                        </li>
                        <li>
                            <a href="#!">Distributors</a>
                        </li>
                        <li>
                            <a href="{{route('guestshop')}}">Shop</a>
                        </li>
                        {{--                        <li class="">--}}
                        {{--                            <a href="#">Blog</a>--}}
                        {{--                        </li>--}}
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
                <div class="cart-search-contact">
                    <div class="mini-cart">
                        <button class="cart-toggle-btn"><i class="fi flaticon-shopping-bag"></i> <span
                                    class="cart-count">0</span></button>
                        <div class="mini-cart-content">
                            <div class="mini-cart-title">
                                <p>Shopping Cart</p>
                            </div>
                            <div class="mini-cart-items">
                                <div class="mini-cart-item clearfix">
                                    {{--                                    <div class="mini-cart-item-image">--}}
                                    {{--                                        <a href="#"><img src="{{asset('assets/images/shop/mini/img-1.jpg')}}"--}}
                                    {{--                                                         alt="Hoodie with zipper"></a>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="mini-cart-item-des">--}}
                                    {{--                                        <a href="#">Hoodie with zipper</a>--}}
                                    {{--                                        <span class="mini-cart-item-price">$25.15</span>--}}
                                    {{--                                        <span class="mini-cart-item-quantity">x 1</span>--}}
                                    {{--                                    </div>--}}
                                    Cart is Empty
                                </div>
                            </div>
                            <div class="mini-cart-action clearfix">
                                <span class="mini-checkout-price">&#x20a6; 0.00</span>
                                <a href="#" class="theme-btn-s4">View Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-form-wrapper">
                        <button class="search-toggle-btn"><i class="fi flaticon-magnifying-glass"></i></button>
                        <div class="header-search-form">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <button type="submit"><i class="fi flaticon-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

    @yield('content')

    {{--    footer--}}

    <div class="wpo-ne-footer">
        <!-- start wpo-news-letter-section -->
        <section class="wpo-news-letter-section" style="background: #1e7301;
background: linear-gradient(90deg, rgba(30, 115, 1, 1) 0%, rgba(145, 106, 54, 1) 100%);">
            <div class="container" >
                <div class="row">
                    <div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="wpo-newsletter">
                            <h3>Follow us for Updates</h3>
                            <div class="wpo-newsletter-form">
                                <form>
                                    <div>
                                        <input type="text" placeholder="Enter Your Email" class="form-control">
                                        <button type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-news-letter-section -->
        <!-- start wpo-site-footer -->
        <footer class="wpo-site-footer" style="background: #1e7301;
background: linear-gradient(90deg, rgba(30, 115, 1, 1) 0%, rgba(145, 106, 54, 1) 100%);">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="{{asset('assets/images/logo-2-nbg.png')}}" alt="blog">
                                </div>
                                <p>
                                    Join a community of healthy and wealthy people sharing and earning together.
                                    wpo-features
                                </p>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Causes</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Our Event</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-6">
                            <div class="widget market-widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <p>One Stop Shop for solution to all our recurrent health challenges</p>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-pin"></i>Ikotun Lagos.</li>
                                        <li><i class="fi flaticon-call"></i>+234 803 410 8410</li>
                                        <li><i class="fi flaticon-envelope"></i>info@walnuthealthcare.org</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer" style="background: darkgreen;">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright">&copy; 2025 Walnut Healthcare All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end wpo-site-footer -->
    </div>
</div>
<!-- end of page-wrapper -->
<!-- All JavaScript files
================================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins for this template -->
<script src="{{asset('assets/js/jquery-plugin-collection.js')}}"></script>
<!-- Custom script for this template -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/overlay.js')}}"></script>
<script src="{{asset('assets/js/jquery.typewatch.js')}}"></script>

{{--<!--Start of Tawk.to Script-->--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function (){--}}
{{--        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--        (function(){--}}
{{--            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--            s1.async=true;--}}
{{--            s1.src='https://embed.tawk.to/5e75dd208d24fc226589156d/default';--}}
{{--            s1.charset='UTF-8';--}}
{{--            s1.setAttribute('crossorigin','*');--}}
{{--            s0.parentNode.insertBefore(s1,s0);--}}
{{--        })();--}}
{{--    });--}}

{{--</script>--}}
{{--<!--End of Tawk.to Script-->--}}

@include('scripts.general_scripts')
@yield('index_script')
</body>

</html>

