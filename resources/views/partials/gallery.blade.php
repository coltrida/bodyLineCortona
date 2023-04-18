<!-- Gallery Section -->
<section class="gallery-section">
    <div class="outer-container">
        <div class="row clearfix">

            <!-- Gallery Block -->
            @if(count($photosPrimo)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosPrimo[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosPrimo[0])}}" data-fancybox="images1"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosPrimo); $i++ )
                                    <a  href="{{asset('storage/'.$photosPrimo[$i])}}" data-fancybox="images1"
                                       data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Sala Fitness</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosSecondo)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosSecondo[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosSecondo[0])}}" data-fancybox="images2"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosSecondo); $i++ )
                                        <a  href="{{asset('storage/'.$photosSecondo[$i])}}" data-fancybox="images2"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Sala Arti Marziali</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosTerzo)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosTerzo[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosTerzo[0])}}" data-fancybox="images3"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosTerzo); $i++ )
                                        <a  href="{{asset('storage/'.$photosTerzo[$i])}}" data-fancybox="images3"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Esterni</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosQuarto)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosQuarto[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosQuarto[0])}}" data-fancybox="images4"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosQuarto); $i++ )
                                        <a  href="{{asset('storage/'.$photosQuarto[$i])}}" data-fancybox="images4"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Sala Funzionale</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosQuarto)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosQuinto[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosQuinto[0])}}" data-fancybox="images5"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosQuinto); $i++ )
                                        <a  href="{{asset('storage/'.$photosQuinto[$i])}}" data-fancybox="images5"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Sala Pesi</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosSesto)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosSesto[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosSesto[0])}}" data-fancybox="images6"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosSesto); $i++ )
                                        <a  href="{{asset('storage/'.$photosSesto[$i])}}" data-fancybox="images6"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Piscina</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosSettimo)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosSettimo[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosSettimo[0])}}" data-fancybox="images7"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosSettimo); $i++ )
                                        <a  href="{{asset('storage/'.$photosSettimo[$i])}}" data-fancybox="images7"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Sala Posturale</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Gallery Block -->
            @if(count($photosOttavo)>0)
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img style="height: 300px; object-fit: cover" src="{{asset('storage/'.$photosOttavo[0])}}" alt=""/>
                        <a class="overlay-link" href="{{asset('storage/'.$photosOttavo[0])}}" data-fancybox="images8"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    @for($i = 1; $i < count($photosOttavo); $i++ )
                                        <a  href="{{asset('storage/'.$photosOttavo[$i])}}" data-fancybox="images8"
                                            data-caption=""></a>
                                    @endfor
                                    <h4 style="text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff; font-size: 20px"><a >Sala Relax</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
{{--

            <!-- Gallery Block -->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/gallery/9.jpg')}}" alt=""/>
                        <a class="overlay-link" href="images/gallery/gallery9.jpg" data-fancybox="images"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a class="plus" href="images/gallery/gallery9.jpg" data-fancybox="images"
                                       data-caption=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/gallery/10.jpg')}}" alt=""/>
                        <a class="overlay-link" href="images/gallery/gallery10.jpg" data-fancybox="images"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a class="plus" href="images/gallery/gallery10.jpg" data-fancybox="images"
                                       data-caption=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/gallery/11.jpg')}}" alt=""/>
                        <a class="overlay-link" href="images/gallery/gallery11.jpg" data-fancybox="images"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a class="plus" href="images/gallery/gallery11.jpg" data-fancybox="images"
                                       data-caption=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('images/gallery/12.jpg')}}" alt=""/>
                        <a class="overlay-link" href="images/gallery/gallery12.jpg" data-fancybox="images"
                           data-caption=""></a>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a class="plus" href="images/gallery/gallery12.jpg" data-fancybox="images"
                                       data-caption=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
--}}

        </div>
    </div>
</section>
<!-- End Gallery Section -->
