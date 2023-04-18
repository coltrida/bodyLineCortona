<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BodyLine Cortona</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloder -->
    <div id="preloder" class="preloader">
        <div class="loader"></div>
    </div>
    <!-- Εnd Preloader -->

    <!-- Main Header-->
    <header class="main-header header-style-one">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="outer-container">
                <div class="inner-container clearfix">

                    <!-- Logo Box -->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('inizio')}}"><img src="{{asset('images/logo.png')}}" alt="" title=""></a>
                        </div>
                    </div>

                    <!-- Logo -->
                    <div class="mobile-logo pull-left">
                        <a href="{{route('inizio')}}" title="">
                            <h3>Vai alla Home</h3>
                        </a>
                    </div>

                    <!-- Header Social Box -->
                    <div class="header-social-box clearfix">
                        <a target="_blank" href="https://www.facebook.com/bodylinecortona/" class="fa fa-facebook"></a>
                        <a target="_blank" href="https://www.instagram.com/palestrabodyline/?r=nametag" class="fa fa-instagram"></a>
                        {{--<a href="#" class="fa fa-linkedin"></a>--}}
                    </div>

                    <div class="outer-box clearfix">

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <div class="nav-btn">
                                <a class="hidden-bar-opener" href="{{route('inizio')}}">Vai alla Home</a>
                            </div>
                        </div>
                        <!-- / Hidden Nav Toggler -->

                    </div>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('inizio')}}" title=""><img src="{{asset('images/logo-small.png')}}" style="height: 60px"
                                                       alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            {{--<nav class="menu-box">
                <div class="nav-logo"><a href="{{route('inizio')}}"><img src="{{asset('images/logo-small.png')}}" alt=""
                                                                title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>--}}

        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

@yield('main')


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
