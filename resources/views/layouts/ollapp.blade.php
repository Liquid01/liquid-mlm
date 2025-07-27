<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport"

          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="theme-color" content="#333">

    <title>Miracleseed: Welcome</title>

    <meta name="keywords"

          content="miracleseed, Life Seed, miracleseed Worldwide, Empowerment, Skills Acquisition, Training and Development, Vocational Training, Food, Halthcare, Life Seed Worldwide, MLM, Networking, Food Network ">

    <meta name="description" content="miracleseed is a progressive community of business entrepreneurs with the sole mission of

    providing quality and affordable Education, Empowerment, Food and healthcare services to the community through Business support, crowdfunding, Ecommerce

, and her campaign against Hunger and malnutrition.">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logos/favicon.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{asset('assets/css/preload.min.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/style.light-blue-500.min.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/width-boxed.min.css')}}" id="ms-boxed" disabled="">

    <!--[if lt IE 9]>

    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>

    <script src="{{asset('assets/js/respond.min.js')}}"></script>

    <![endif]-->



    <style>

        input::-webkit-outer-spin-button,

        input::-webkit-inner-spin-button {

            /* display: none; <- Crashes Chrome on hover */

            -webkit-appearance: none !important;

            margin: 0 !important; /* <-- Apparently some margin are still there even though it's hidden */

        }



        input[type=number] {

            -moz-appearance: textfield !important; /* Firefox */

        }

    </style>

</head>

<body>

@if(auth()->user() != null)

    <span class="hidden"

          style="display:none;">{{$pro_pix = auth()->user()->image == null? 'avatar2.png':auth()->user()->image}}</span>



@else

    <span class="hidden" style="display:none;">{{$pro_pix = 'avatar2.png'}}</span>



@endif



<a href="javascript:void(0)"

   class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand">

    @if($pro_pix == "avatar2.png")

        <i class="fa fa-user-circle-o"></i>

    @else

        <img src="{{asset('public/upload/profile/thumb/'.$pro_pix)}}" alt="" width="50"

             class="img-circle img-responsive"

             style="display: inline">

    @endif

</a>



<a href="{{route('pay')}}"

   class=" ms-configurator-btn btn-circle btn-circle-raised btn-circle-royal animated rubberBand mt-4"

   style="margin-top:80px!important;">

    <i class="">Pay</i>

</a>



<a href="{{route('buypin')}}"

   class=" ms-configurator-btn btn-circle btn-circle-raised btn-circle-info animated rubberBand mt-4"

   style="margin-top:160px!important;">

    <i class="">PIN</i>

</a>



<div id="ms-configurator" class="ms-configurator">

    <div class="ms-configurator-title">

        <h3>

            <i class="fa fa-gear"></i> Account

        </h3>

        <a href="javascript:void(0);" class="ms-conf-btn withripple">

            <i class="zmdi zmdi-close"></i>

        </a>

    </div>

    <div class="panel-group" id="accordion_conf" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">

            <div class="text-center pt-1 pb-1">

                <img src="{{asset('public/upload/profile/thumb/'.$pro_pix)}}" alt="" width="50"

                     class="img-circle img-responsive"

                     style="display: inline">

            </div>



            <div class="btn-group btn-group-justified btn-group-raised">

                @guest

                <a href="{{route('login')}}" class="btn ">Login</a>

                {{--<a href="#" class="btn ">Middle</a>--}}



                <a href="{{route('register')}}" class="btn ">Register</a>

                @endguest



                @auth

                <a href="{{route('dashboard')}}" class="btn ">{{ Auth::user()->username }}</a>

                <a href="{{route('dashboard')}}" class="btn" onclick="event.preventDefault();

                    document.getElementById('logout-form').submit();">Logout</a>

                @endauth

            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>



        </div>

        <div class="panel panel-default">

            <div class="panel-heading" role="tab" id="ms-conf-header-color">

                <h4 class="panel-title">

                    <a role="button" class="withripple" data-toggle="collapse" data-parent="#accordion_conf"

                       href="#ms-collapse-conf-1" aria-expanded="true" aria-controls="ms-collapse-conf-1">

                        <i class="zmdi zmdi-menu"></i> Menu </a>

                </h4>

            </div>

            <div id="ms-collapse-conf-1" class="panel-collapse collapse in" role="tabpanel"

                 aria-labelledby="ms-conf-header-color">

                <div class="card">

                    {{--<div class="card-header">{{ __('Login') }}</div>--}}



                    <div class="card-body">

                        <nav>

                            <ul class="nav navbar-dark  ms-navbar-white" style="list-style-type:none; ">

                                <ul class="main-nav-top">

                                    <li class="nav-top-link"><a href="javascript:void(0);" class="nav-top-anchor">Sell</a></li>

                                    <li class="nav-top-link"><a href="javascript:void(0);" class="nav-top-anchor">Shop</a></li>

                                    <li class="nav-top-link"><a href="javascript:void(0);" class="nav-top-anchor">Jobs</a></li>

                                    <li class="nav-top-link"><a href="javascript:void(0);" class="nav-top-anchor">Vendors</a></li>

                                </ul>

                                <li class="list-group-item">

                                    <a data-scroll href="#home" class="ms-conf-btn withripple home_btn"><i

                                                class="fa fa-home side"></i>Home</a>

                                </li>

                                <li class="list-group-item">

                                    <a data-scroll href="#services" class="ms-conf-btn withripple"><i

                                                class="fa fa-globe side"></i>Services</a>

                                </li>

                                <li class="list-group-item">

                                    <a data-scroll href="#features" class="ms-conf-btn withripple"><i

                                                class="zmdi zmdi-widgets side"></i>Packages</a>

                                </li>

                                <li class="list-group-item">

                                    <a data-scroll href="#plan" class="ms-conf-btn withripple"><i

                                                class="zmdi zmdi-device-hub side"></i>Marketing Plan</a>

                                </li>

                                <li class="list-group-item">

                                    <a data-scroll href="#support" class="ms-conf-btn withripple">

                                        <i class="fa fa-male side"></i>Support

                                    </a>

                                </li>

                                <li class="list-group-item">

                                    <a data-scroll href="{{route('shop')}}" class="ms-conf-btn withripple">

                                        <i class="fa fa-shopping-cart side"></i>Ecommerce

                                    </a>

                                </li>

                                <li class="list-group-item">

                                    <a data-scroll href="{{route('register')}}" id="register_btn"

                                       class="register_link ms-conf-btn withripple"><i class="fa fa-user-plus side"></i>Join</a>

                                </li>

                                {{--<li>--}}

                                {{--<!-- Right Side Of Navbar -->--}}

                                {{--<ul class="navbar-nav ml-auto">--}}

                                {{--<!-- Authentication Links -->--}}

                                {{--@guest--}}

                                {{--<li class="nav-item">--}}

                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}

                                {{--</li>--}}

                                {{--@if (Route::has('register'))--}}

                                {{--<li class="nav-item">--}}

                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}

                                {{--</li>--}}

                                {{--@endif--}}

                                {{--@else--}}

                                {{--<li class="nav-item dropdown">--}}

                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}

                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}

                                {{--</a>--}}



                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}

                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}

                                {{--onclick="event.preventDefault();--}}

                                {{--document.getElementById('logout-form').submit();">--}}

                                {{--{{ __('Logout') }}--}}

                                {{--</a>--}}



                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}

                                {{--@csrf--}}

                                {{--</form>--}}

                                {{--</div>--}}

                                {{--</li>--}}

                                {{--@endguest--}}

                                {{--</ul>--}}

                                {{--</li>--}}

                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div id="ms-preload" class="ms-preload">

    <div id="status">

        <div class="spinner">

            <div class="dot1"></div>

            <div class="dot2"></div>

        </div>

    </div>

</div>

<div class="sb-site-container" id="home">

    <nav class="navbar navbar-pr ms-lead-navbar bg-primary navbar-mode"

         style="background-color: #CE7200!important; border-bottom:2px solid #ffffff;"

         id="navbar-lead">

        <div class="container container-full">

            <div class="navbar-header" style="display: inline-block;">

                <a class="navbar-brand" style="margin-right:0px" href="{{url('/')}}">

                    <img src="{{asset('assets/img/logos/logo5.png')}}" class="hidden-xs"

                         style="max-width:130px!important;" alt="">

                    <img src="{{asset('assets/img/logos/logo3.png')}}" class="visible-xs"

                         style="max-width:50px!important;" alt="">

                    {{--<span class="ms-logo ms-logo-white ms-logo-sm">LS</span>--}}

                    {{--<span class="ms-title">Life--}}

                    {{--<strong>Seed</strong>--}}

                    {{--</span>--}}

                </a>

            </div>



            <a href="{{route('login')}}"

               class="btn-circle btn-circle-raised btn-circle-white btn-circle-warning pull-right visible-xs visible-lg"

               style="width:80px; height: 30px; line-height: 28px; margin-top:10px; margin-right:15px;">

                <i class="fa fa-sign-in" style=" font-size: 16px;"> Login</i>

                <div class="ripple-container"></div>

            </a>



            <a href="{{route('register')}}"

               class="btn-circle btn-circle-raised btn-circle-white btn-circle-warning pull-right visible-xs visible-lg"

               style="width:80px; height: 30px; line-height: 28px; margin-top:10px; margin-right:15px;">

                <i class="zmdi zmdi-account-add" style=" font-size: 16px;"> Join</i>

                <div class="ripple-container"></div>

            </a>

            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li>

                        <a data-scroll href="#home" class="home_btn">Home</a>

                    </li>

                    <li>

                        <a data-scroll href="#services">Services</a>

                    </li>

                    <li>

                        <a data-scroll href="#features">Packages</a>

                    </li>

                    <li>

                        <a data-scroll href="#plan">Compensation</a>

                    </li>

                    <li>

                        {{--<a data-scroll href="#support">Support</a>--}}

                    </li>

                    <li>

                        <a data-scroll href="{{route('guestshop')}}">Shop</a>

                    </li>

                    <li>

                        <a data-scroll href="{{route('register')}}" id="register_btn" class="register_link hidden-lg">Join</a>

                    </li>

                    {{--<li>--}}

                    {{--<!-- Right Side Of Navbar -->--}}

                    {{--<ul class="navbar-nav ml-auto">--}}

                    {{--<!-- Authentication Links -->--}}

                    {{--@guest--}}

                    {{--<li class="nav-item">--}}

                    {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}

                    {{--</li>--}}

                    {{--@if (Route::has('register'))--}}

                    {{--<li class="nav-item">--}}

                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}

                    {{--</li>--}}

                    {{--@endif--}}

                    {{--@else--}}

                    {{--<li class="nav-item dropdown">--}}

                    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}

                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}

                    {{--</a>--}}



                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}

                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}

                    {{--onclick="event.preventDefault();--}}

                    {{--document.getElementById('logout-form').submit();">--}}

                    {{--{{ __('Logout') }}--}}

                    {{--</a>--}}



                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}

                    {{--@csrf--}}

                    {{--</form>--}}

                    {{--</div>--}}

                    {{--</li>--}}

                    {{--@endguest--}}

                    {{--</ul>--}}

                    {{--</li>--}}

                </ul>

            </div>

            <!-- navbar-collapse collapse -->

            {{--<a href="javascript:void(0)" class="ms-conf-btn ms-configurator-btn btn-navbar-menu visible-xs">--}}

            {{--<i class="zmdi zmdi-menu"></i>--}}

            {{--</a>--}}

        </div>

        <!-- container -->

    </nav>



    <div class="main" id="main">

        @yield('content')

    </div>

    <div class="btn-back-top">

        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">

            <i class="zmdi zmdi-long-arrow-up"></i>

        </a>

    </div>

</div>

<!-- sb-site-container -->

<div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">

    {{--<header class="ms-slidebar-header">--}}

    {{--<div class="ms-slidebar-login">--}}

    {{--<a href="javascript:void(0)" class="withripple">--}}

    {{--<i class="zmdi zmdi-account"></i> Login</a>--}}

    {{--<a href="javascript:void(0)" class="withripple">--}}

    {{--<i class="zmdi zmdi-account-add"></i> Register</a>--}}

    {{--</div>--}}

    {{--<div class="ms-slidebar-title">--}}

    {{--<form class="search-form">--}}

    {{--<input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />--}}

    {{--<label for="search-box-slidebar">--}}

    {{--<i class="zmdi zmdi-search"></i>--}}

    {{--</label>--}}

    {{--</form>--}}

    {{--<div class="ms-slidebar-t">--}}

    {{--<span class="ms-logo ms-logo-sm">M</span>--}}

    {{--<h3>Material--}}

    {{--<span>Style</span>--}}

    {{--</h3>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--</header>--}}

    <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">

        <li>

            <a data-scroll class="link" href="#home">

                <i class="zmdi zmdi-home"></i> Home</a>

        </li>

        <li>

            <a data-scroll class="link" href="#services">

                <i class="zmdi zmdi-flight-takeoff"></i> Services</a>

        </li>

        <li>

            <a data-scroll class="link" href="#portfolio">

                <i class="zmdi zmdi-desktop-mac"></i> Portfolio</a>

        </li>

        <li>

            <a data-scroll class="link" href="#pricing">

                <i class="zmdi zmdi-money-box"></i> Marketing Plan</a>

        </li>

        <li>

            <a data-scroll class="link" href="#about">

                <i class="zmdi zmdi-info-outline"></i> About</a>

        </li>

        <li>

            <a data-scroll class="link" href="#team">

                <i class="zmdi zmdi-accounts"></i> Team</a>

        </li>

        <li>

            <a data-scroll class="link" href="#feedback">

                <i class="zmdi zmdi-email"></i> Feedback</a>

        </li>

    </ul>

</div>



<meta name="_token" content="{!! csrf_token() !!}">

<footer class="ms-footer">

    <div class="container">

        <p>Copyright &copy; miracleseed 2020</p>

    </div>

</footer>

<div class="btn-back-top">

    <a href="#" data-scroll id="back-top"

       class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">

        <i class="zmdi zmdi-long-arrow-up"></i>

    </a>

</div>





<script src="{{asset('assets/js/plugins.min.js')}}"></script>

<script src="{{asset('assets/js/app.min.js')}}"></script>

<script src="{{asset('assets/js/configurator.min.js')}}"></script>

<script src="{{asset('assets/js/lead-full.js')}}"></script>

<script src="{{asset('assets/js/home-generic-7.js')}}"></script>

<script src="{{asset('assets/js/component-carousels.js')}}"></script>

<script src="{{asset('assets/js/overlay.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>

<script src="{{asset('assets/js/coming.js')}}"></script>



<!--Start of Tawk.to Script-->

<script type="text/javascript">

    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();

    (function () {

        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];

        s1.async = true;

        s1.src = 'https://embed.tawk.to/5e75dd208d24fc226589156d/default';

        s1.charset = 'UTF-8';

        s1.setAttribute('crossorigin', '*');

        s0.parentNode.insertBefore(s1, s0);

    })();

</script>

<!--End of Tawk.to Script-->





<script>

    $(document).ready(function () {

        if ($("#sponsor").val() != "") {

            var sponsor = $('#sponsor').val();



            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                }

            });





            $.ajax({

                type: 'GET',

                url: "{!!URL::route('checkSponsorship')!!}",

                dataType: 'json',

                data: {refId: sponsor},

                success: function (data) {

//                        var result = json.

//alert(data);

                    if (data.validity == 'invalid') {

                        $("#sponsor_result").html("<span class='invalid-input danger text-danger color-red'> Invalid Sponsor Username</span>");

                    } else {

                        $("#sponsor_result").html("<span class='invalid-success " +

                            "success text-success color-green'> " + data.firstname + " " + data.lastname +

                            "</span>");

                    }





                }

            });

        }





        $('#sponsor').on('keyup', function () {



//            alert('hi');



            function timer() {

                var sponsor = $('#sponsor').val();



                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                    }

                });



                $(this).LoadingOverlay('show', true);





                $.ajax({

                    type: 'GET',

                    url: "{!!URL::route('checkSponsorship')!!}",

                    dataType: 'json',

                    data: {refId: sponsor},

                    success: function (data) {

//                        var result = json.

//alert(data);

                        if (data.validity == 'invalid') {

                            $("#sponsor_result").html("<span class='invalid-input danger text-danger color-red'> Invalid Sponsor Username</span>");

                        } else {

                            $("#sponsor_result").html("<span class='invalid-success " +

                                "success text-success color-green'> " + data.firstname + " " + data.lastname +

                                "</span>");

                        }





                    }

                });



//                $('#yourname').text(name);

            }



            //setTimeout(myFunc,5000);

            setTimeout(timer, 2000);



        });



        if ($("#parent").val() != "") {

            var parent = $('#parent').val();



            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                }

            });



            $.ajax({

                type: 'GET',

                url: "{!!URL::route('checkSponsorship')!!}",

                dataType: 'json',

                data: {refId: parent},

                success: function (data) {

//                        var result = json.



                    if (data.validity == 'invalid') {

                        $("#parent_result").html("<span class='invalid-input danger text-danger color-red'> Invalid Parent Username</span>");

                    } else {

                        $("#parent_result").html("<span class='invalid-success " +

                            "success text-success color-green'> " + data.firstname + " " + data.lastname +

                            "</span>");

                    }

                }

            });

        }



                {{--$('#parent').on('keyup', function () {--}}



                {{--function timer() {--}}

                {{--var parent = $('#parent').val();--}}



                {{--$.ajaxSetup({--}}

                {{--headers: {--}}

                {{--'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}

                {{--}--}}

                {{--});--}}



                {{--$.ajax({--}}

                {{--type: 'GET',--}}

                {{--url: "{!!URL::route('checkSponsorship')!!}",--}}

                {{--dataType: 'json',--}}

                {{--data: {refId: parent},--}}

                {{--success: function (data) {--}}

                {{--//                        var result = json.--}}



                {{--if (data.validity == 'invalid') {--}}

                {{--$("#parent_result").html("<span class='invalid-input danger text-danger color-red'> Invalid Parent Username</span>");--}}

                {{--} else {--}}

                {{--$("#parent_result").html("<span class='invalid-success " +--}}

                {{--"success text-success color-green'> " + data.firstname + " " + data.lastname +--}}

                {{--"</span>");--}}

                {{--}--}}





                {{--}--}}

                {{--});--}}



                {{--//                $('#yourname').text(name);--}}

                {{--}--}}



                {{--setTimeout(timer, 2000);--}}



                {{--});--}}





        var username = $('#username').val();



        if (username != "") {

            var username = $('#username').val();



            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                }

            });



            $.ajax({

                type: 'GET',

                url: "{!!URL::route('checkUsernameAvailability')!!}",

                dataType: 'json',

                data: {username: username},

                success: function (data) {

//                        var result = json.



                    if (data.availability == 'unavailable') {

                        $("#username_result").html("<span class='invalid-input danger text-danger color-red'> Username NOT available</span>");

                    } else {

                        $("#username_result").html("<span class='invalid-success " +

                            "success text-success color-green'> " + "Username Available" +

                            "</span>");

                    }





                }

            });

        }



        $('#username').on('keyup', function () {



            if ($('#username').val() != "" && $('#username').val().length >= 4) {

                function timer() {

                    var username = $('#username').val();



                    $.ajaxSetup({

                        headers: {

                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                        }

                    });



                    $.ajax({

                        type: 'GET',

                        url: "{!!URL::route('checkUsernameAvailability')!!}",

                        dataType: 'json',

                        data: {username: username},

                        success: function (data) {

//                        var result = json.



                            if (data.availability == 'unavailable') {

                                $("#username_result").html("<span class='invalid-input danger text-danger color-red'> Username NOT available</span>");

                            } else {

                                $("#username_result").html("<span class='invalid-success " +

                                    "success text-success color-green'> " + "Username Available" +

                                    "</span>");

                            }





                        }

                    });



//                $('#yourname').text(name);

                }

            } else {

                $("#username_result").html("<span class='invalid-input danger text-danger color-red'> INVALID username! Minimum is 4</span>");

            }





            setTimeout(timer, 2000);



        });



//        $.getJSON('/functions.php', {get_param: 'value'}, function (data) {

//            $.each(data, function (index, element) {

//                $('body').append($('<div>', {

//                    text: element.name

//                }));

//            });

//        });

//        document.ready



        $("#donate_button").click(function () {

//            alert('yeah');

            $("#pay_option").slideToggle("slow");

        });





        $("#buy_button").click(function () {

//            alert('yeah');

            $("#buy_option").slideToggle("slow");

        });



        $("#pay_in_bank").click(function () {

            $("#bank_account").slideToggle("slow");

        });



        $("#buy_in_bank").click(function () {

            $("#bank_account").slideToggle("slow");

        });

    });

</script>



<script>





    function verifyTransaction(ref) {



        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

            }

        });



        $.ajax({

            type: "POST",

            url: "/verifyTransactionRef",

            dataType: 'json',

            data: {'reference': ref},

            success: function (data) {





                if (data.status !== null) {

                    return data;

                } else {



                    return "failed to credit Voucher";



                }

            }



        });

    }

</script>

</body>

W
