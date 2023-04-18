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
                        <a href="{{route('inizio')}}" title=""><img src="{{asset('images/logo-small.png')}}" alt="" title=""></a>
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
                                <button class="hidden-bar-opener">Menu</button>
                            </div>
                        </div>
                        <!-- / Hidden Nav Toggler -->

                    </div>

                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon"><img
                                    src="{{asset('images/icons/burger.svg')}}" alt=""/></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    @include('partials.menu')

                                </ul>
                            </div>
                        </nav>

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

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('inizio')}}"><img src="{{asset('images/logo-small.png')}}" alt=""
                                                                title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>

        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- FullScreen Menu -->
    <div class="fullscreen-menu">
        <!--Close Btn-->
        <div class="close-menu"><span>Chiudi</span></div>

        <div class="menu-outer-container">
            <div class="menu-box">
                <nav class="full-menu">
                    <ul class="navigation">

                       @include('partials.menu')

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End FullScreen Menu -->

@yield('main')


<!-- Main Footer -->
    <footer id="infondo" class="main-footer">
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="{{route('inizio')}}"><img width="100" src="{{asset('images/logo-small.png')}}" alt=""/></a>
                                    </div>
                                    <!-- Footer Mobile Logo -->
                                    <div class="footer-mobile-logo">
                                        <a href="{{route('inizio')}}"><img src="{{asset('images/logo.svg')}}" alt=""
                                                                  title=""></a>
                                    </div>
                                    <ul class="info-list">
                                        <li><span></span>BODY LINE s.n.c. <br>di Castellani e Moretti</li>
                                        <li><span>Indirizzo:</span>Nuova variante ex SS 71 <br>Loc. Camucia - Cortona (AR)</li>
                                        <li><span>partita IVA:</span>01639380516</li>
                                        <li><span>Telefono:</span>
                                            <a href="tel:3387955788">3387955788</a>
                                        </li>
                                        {{--<li style="font-size: 12px"><span>Working Hours:</span>
                                            @foreach($orario as $giorno)
                                                <div class="row">
                                                    <div class="col">{{$giorno->giornosettimana}}</div>
                                                    <div class="col">{{$giorno->oraMattinoInizio}}/{{$giorno->oraMattinoFine}}</div>
                                                    <div class="col">
                                                        @if(isset($giorno->oraPomeriggioInizio))
                                                            {{$giorno->oraPomeriggioInizio}}/{{$giorno->oraPomeriggioFine}}
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </li>--}}
                                        <li><span>Email:</span><a href="mailto:nuvolefumo@gmail.com">nuvolefumo@gmail.com</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
                                    <h6>In Evidenza</h6>
                                    <div class="widget-content">

                                        @foreach($inEvidenza as $ele)
                                            <div class="post">
                                                <div class="thumb"><a href="{{route('notizia', $ele->id)}}"><img
                                                            src="{{asset($ele->path)}}" alt=""></a>
                                                </div>
                                                <h5><a href="{{route('notizia', $ele->id)}}">{{$ele->titolo}}</a>
                                                </h5>
                                                <span class="date">{{$ele->created_at->format('d M Y')}}</span>
                                            </div>
                                        @endforeach

                                       {{-- <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img
                                                        src="{{asset('images/resource/post-thumb-2.jpg')}}" alt=""></a>
                                            </div>
                                            <h5><a href="blog-detail.html">10 TIPS HOW TO PREPARE MEALS FAST AND
                                                    EASY</a></h5>
                                            <span class="date">JUNE 21, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img
                                                        src="{{asset('images/resource/post-thumb-3.jpg')}}" alt=""></a>
                                            </div>
                                            <h5><a href="blog-detail.html">SIMPLE CONDITION FOR ALL AROUND FITNESS</a>
                                            </h5>
                                            <span class="date">JUNE 21, 2020</span>
                                        </div>--}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h6>Orario</h6>
                                    <div class="widget-content">

                                        <ul class="info-list">
                                            <li style="font-size: 18px; color: white">
                                                @foreach($orario as $giorno)
                                                    <div class="row">
                                                        <div class="col-2">{{$giorno->giornosettimanabreve}}</div>
                                                        <div class="col-4">{{$giorno->oraMattinoInizio}}/{{$giorno->oraMattinoFine}}</div>
                                                        <div class="col-4">
                                                            @if(isset($giorno->oraPomeriggioInizio))
                                                                {{$giorno->oraPomeriggioInizio}}/{{$giorno->oraPomeriggioFine}}
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </li>

                                            <li class="social-links mt-3 text-white" ><span>I nostri Social:</span><br>
                                                <a target="_blank" href="https://www.facebook.com/bodylinecortona/" class="fa fa-facebook text-white"></a>
                                                <a target="_blank" href="https://www.instagram.com/palestrabodyline/?r=nametag"  class="fa fa-instagram text-white"></a>
                                                {{--<a href="#" class="fa fa-linkedin text-white"></a>--}}
                                            </li>

                                            <li class="social-links mt-3 text-white">
                                                <a href="#">Informativa Privacy</a>
                                            </li>
                                        </ul>
                                       {{--

                                        <div class="images-outer clearfix">
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/1.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-1.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/2.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-2.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/3.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-3.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/4.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-4.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/5.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-5.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/6.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-6.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/7.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-7.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/8.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-8.jpg')}}"
                                                        alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="{{asset('images/gallery/9.jpg')}}"
                                                                         class="lightbox-image"
                                                                         data-fancybox="footer-gallery"
                                                                         title="Image Title Here"
                                                                         data-fancybox-group="footer-gallery"><img
                                                        src="{{asset('images/gallery/footer-gallery-thumb-9.jpg')}}"
                                                        alt=""></a></figure>
                                        </div>
--}}
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            {{--<div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h6>Newsletter</h6>
                                    <div class="text">BODYLINE CORTONA – centro benessere e fitness dove il tuo corpo ritrova la sua forma!
                                        Comincia ad allenarti adesso "to stay fit and healthy" tutto l'anno!
                                    </div>
                                    <!-- Newsletter Form -->
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Email"
                                                       required="">
                                                <button type="submit" class="theme-btn submit-btn"><span><img
                                                            src="{{asset('images/icons/message-icon.png')}}"
                                                            alt=""/></span></button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>--}}

                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="copyright">COLTRICAT@2021</div>
            </div>

        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Purchase Popup -->
{{--

<div id="purchase-popup" class="purchase-popup">
    <div class="close-search theme-btn"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>

        <div class="purchase-form">
            <div class="sec-title centered">
                <h2><span>GET FREE</span> CONSULTATION</h2>
                <div class="text">If you need of a Personal Trainer, Fitness Instructor advice, or a healthy <br> living
                    product review, please feel free to contact us
                </div>
            </div>

            <!-- Default Form -->
            <form method="post" action="contact.html">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea class="darma" name="message" placeholder="Your Message"></textarea>
                    </div>

                    <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                        <span class="data">* Personal data will be encrypted</span>
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">SEND MESSAGE</span>
                        </button>
                    </div>

                </div>
            </form>


        </div>

    </div>
</div>

--}}

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
