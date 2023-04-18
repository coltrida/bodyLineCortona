@extends('layouts.landing')

@section('main')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-detail style-two">
                        <div class="inner-box">

                            <h5>{{$post->titolo}}</h5>
                            <div class="image">
                                <img src="{{asset($post->path)}}" alt="" />
                            </div>
                            <ul class="post-info">
                                <li><span>Data: </span>12-13 Maggio 2023</li>
                            </ul>
                            <p>{{$post->testo}}</p>

                            {{--<p>
                                Corso di formazione riconosciuto da ASI, ente di formazione riconosciuto dal CONI.(VEDI MODULO ISCRIZIONE)
                            </p>--}}

                            <p>
                                <a target="_blank" href="{{asset('/video/01.mp4')}}">
                                    𝐆𝐔𝐀𝐑𝐃𝐀 𝐈𝐋 𝐕𝐈𝐃𝐄𝐎
                                </a>
                            </p>

                            {{--<p>
                                COSTO DEL CORSO: all'interno del modulo
                            </p>--}}

                            <p>
                                𝐒𝐄𝐃𝐄 𝐂𝐎𝐑𝐒𝐎: <br>
                                Palestra Body Line s.n.c <br>
                                Nuova variante ex SS 71, <br>
                                52044 Camucia AR <br>
                                t.338 795 5788 <br>
                            </p>

                            <p>
                                Referente: Roberto Paolini <br>
                                cell.3384877092
                            </p>

                            {{--<p>
                                𝐃𝐎𝐂𝐄𝐍𝐓𝐄: Guido Bruscia <br>
                                𝐎𝐫𝐚𝐫𝐢 𝐜𝐨𝐫𝐬𝐨: registrazione 09.30; corso dalle ore 10:00 alle ore 17:00 c.a
                            </p>

                            <p>
                                <a href="https://www.facebook.com/events/593685868387440">
                                    Link Facebook
                                </a>
                            </p>--}}

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
                </div>

            </div>
        </div>
    </div>

@endsection
