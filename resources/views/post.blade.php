@extends('layouts.stile')

@section('main')

    <!--Page Title-->
    <section id="notizie" class="page-title">
        <div class="auto-container">
            <h2>NOTIZIA</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{route('inizio')}}">home</a></li>
                <li><a href="{{route('notizie')}}">Notizie</a></li>
                <li>{{$post->titolo}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <div class="sidebar-inner">

                            <!-- News Widget -->
                            <div class="sidebar-widget news-widget">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h5>In Evidenza</h5>
                                </div>

                                <div class="widget-content">

                                    @foreach($inEvidenza as $item)
                                    <div class="post">
                                        <div class="thumb"><a href="{{route('notizia', $item->id)}}"><img src="{{asset($item->path)}}" alt=""></a></div>
                                        <h5><a href="{{route('notizia', $item->id)}}">{{$item->titolo}}</a></h5>
                                        <span class="date">{{$item->created_at->format('d M Y')}}</span>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
{{--

                            <!-- Category Widget -->
                            <div class="sidebar-widget category-widget">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h5>CATEGORIES</h5>
                                </div>

                                <div class="widget-content">
                                    <ul class="blog-cat">
                                        <li><a href="#">FITNESS (7)</a></li>
                                        <li><a href="#">HEALTH (15)</a></li>
                                        <li><a href="#">LIFESTYLE (29)</a></li>
                                        <li><a href="#">TRAINING PROGRAM (3)</a></li>
                                        <li><a href="#">SPORT SCIENCE (5)</a></li>
                                        <li><a href="#">NUTRITION (4)</a></li>
                                    </ul>
                                </div>

                            </div>

                            <!-- Instagram Widget -->
                            <div class="sidebar-widget instagram-widget">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h5>INSTAGRAM</h5>
                                </div>
                                <div class="images-outer clearfix">
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/7.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-7.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/8.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-8.jpg" alt=""></a></figure>
                                    <!--Image Box-->
                                    <figure class="image-box"><a href="images/gallery/9.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-9.jpg" alt=""></a></figure>
                                </div>
                            </div>

                            <!-- Newsletter Widget -->
                            <div class="sidebar-widget newsletter-widget">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h5>NEWSLETTER</h5>
                                </div>
                                <div class="text">BIGBEAR – fitness health center where your body gets its shape! Start training now to stay fit and healthy all year round!</div>
                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email" required="">
                                            <button type="submit" class="theme-btn submit-btn"><span class="txt fa fa-envelope-o"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

--}}
                        </div>
                    </aside>
                </div>

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-detail style-two">
                        <div class="inner-box">

                            <h5>{{$post->titolo}}</h5>
                            <div class="image">
                                <img src="{{asset($post->path)}}" alt="" />
                            </div>
                            <ul class="post-info">
                                <li><span>Data: </span>{{$post->created_at->format('d M Y')}}</li>
                            </ul>
                            <p>{{$post->testo}}</p>

{{--                            <!--Video Box-->
                            <div class="video-box" style="background-image:url(images/resource/video-img.jpg)">
                                <figure class="video-image">
                                    <img src="images/resource/video-img.jpg" alt="">
                                </figure>
                                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            </div>--}}

                            <!-- Post Share Options-->
                            <div class="post-share-options clearfix">
                                {{--<div class="pull-left">
                                    <ul class="social-box">
                                        <li class="share">MY SOCIALS:</li>
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
                                    </ul>
                                </div>--}}
                                <div class="pull-right">
                                    <ul >
                                        {{--<li>{{$posts->links()}}</li>--}}
                                        {{--<li><a href="#"><span class="arrow flaticon-back-1"></span>&ensp; Prev</a></li>
                                        <li><a href="#">Next &ensp; <span class="arrow flaticon-arrow-pointing-to-right"></span></a></li>--}}
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
{{--

                    <!-- Related Posts -->
                    <div class="related-posts style-two">
                        <h5>Articles Also Like</h5>
                        <div class="row clearfix">

                            <!-- News Block -->
                            <div class="news-block style-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a class="overlay-link" href="blog-detail.html"></a>
                                        <img src="images/resource/news-13.jpg" alt="" />
                                        <div class="post-date">
                                            <span>7</span>SEP
                                        </div>
                                        <div class="content">
                                            <h4><a href="blog-detail.html">SIMPLE CONDITION FOR ALL AROUND FITNESS</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block style-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a class="overlay-link" href="blog-detail.html"></a>
                                    <div class="image">
                                        <img src="images/resource/news-14.jpg" alt="" />
                                        <div class="post-date">
                                            <span>18</span>SEP
                                        </div>
                                        <div class="content">
                                            <h4><a href="blog-detail.html">10 TIPS HOW TO PREPARE MEALS FAST AND EASY</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

--}}
                </div>

            </div>
        </div>
    </div>

@endsection
