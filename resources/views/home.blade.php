@extends('template.layout')
@section('content')

        @include('cookieConsent::index')

    <div id="myCarousel" class="carousel slide" style="height: 400px" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" style="height: 400px">
            <div class="carousel-item active" style="height: 400px">

                <img class="first-slide" src="{{asset("storage/principal/1.jpeg$versione")}}" style="height: 600px" alt="First slide">
                <div class="container">

                    <div class="carousel-caption text-left">
                        <h1></h1>
                        <p></p>
                        {{--<p><a class="btn btn-lg btn-primary" id="prendi" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 400px">
                <img class="second-slide" src="{{asset("storage/principal/2.jpeg$versione")}}" alt="Second slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 400px">
                <img class="third-slide" src="{{asset("storage/principal/3.jpeg$versione")}}" alt="Third slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1></h1>
                        <p></p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 400px">
                <img class="third-slide" src="{{asset("storage/principal/4.jpeg$versione")}}" alt="Third slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1></h1>
                        <p></p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 400px">
                <img class="third-slide" src="{{asset("storage/principal/5.jpeg$versione")}}" alt="Third slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1></h1>
                        <p></p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 400px">
                <img class="third-slide" src="{{asset("storage/principal/6.jpeg$versione")}}" alt="Third slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1></h1>
                        <p></p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        @if(isset(Auth::user()->name) && Auth::user()->name=='admin')
            <div class="row" style="width:100%;margin-top: -40px;margin-bottom: 30px">
                <a class="nav-link" href="{{route('agenda.modifica')}}">
                    <button type="button" class="btn btn-dark" style="width: 140px;height:60px; margin:0 6px">Gestione <br> Corsi</button>
                </a>
                <a class="nav-link" href="{{route('listino.modifica')}}">
                    <button type="button" class="btn btn-dark" style="width: 140px;height:60px;margin:0 6px">Gestione <br> Listino</button>
                </a>
                <a class="nav-link" href="{{route('news.inserisci')}}">
                    <button type="button" class="btn btn-dark" style="width: 140px;height:60px; margin:0 6px">Gestione <br> News</button>
                </a>
                <a class="nav-link" href="{{route('staff.modifica')}}">
                    <button type="button" class="btn btn-dark" style="width: 140px;height:60px; margin:0 6px">Gestione <br>Staff</button>
                </a>
                <a class="nav-link" href="{{route('foto.modifica')}}">
                    <button type="button" class="btn btn-dark" style="width: 140px;height:60px; margin:0 6px">Gestione <br>Foto</button>
                </a>
                <a class="nav-link" href="">
                    <button type="button" class="btn btn-dark" style="width: 140px;height:60px; margin:0 6px">Paese dei <br>Balocchi</button>
                </a>
            </div>
        @endif

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4 element " id="primacarta" >
                {{--<img class="rounded-circle" src="{{asset('images/schede/salapesi.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/salapesi.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sala Pesi</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Sala Pesi--}}</h2>
                <p class="text-justify block-with-text">
                    Tantissime macchine per allenare ogni muscolo in maniera selettiva. Tra le più grandi presenti nel territorio. In questi spazi è sempre presente un istruttore che mostra, controlla e corregge gli esercizi agli utenti, dopo avergli gratuitamente impostato un primo percorso di fitness a seguito di un iniziale breve colloquio.
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button"  class="btn btn-secondary" href="{{asset('images/salapesi/01.jpg')}}"
                      data-lightbox="salapesi">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapesi/02.jpg')}}"
                       data-lightbox="salapesi">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapesi/03.jpg')}}"
                       data-lightbox="salapesi">
                    </a>
                    {{--<a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapesi/04.jpg')}}"
                       data-lightbox="salapesi">
                    </a>--}}
                    {{--<a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapesi/05.jpg')}}"
                       data-lightbox="salapesi">
                    </a>--}}
                </p>
            </div><!-- /.col-lg-4 -->



            <div class="col-lg-4 element" id="secondacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/fitnessmusicale.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}
                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/fitnessmusicale.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sala Fitness</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                {{--<h2>Sala Fitness</h2>--}}
                <p class="text-justify block-with-text">
                    Di giorno le ampie vetrate che danno sui giardini conferiscono a questa sala una luminosità che invita al movimento.
                    La sera il bianco del soffitto e delle pareti diventa l’ideale sfondo per luci soffuse che colorano l’ambiente rendendo piacevole lo svolgimento delle varie attività ginnico motorie, lezioni di gruppo o musicali proposte nell’orario corsi.
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salafitness/01.jpg')}}"
                      data-lightbox="salafitness">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salafitness/02.jpg')}}"
                       data-lightbox="salafitness">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salafitness/03.jpg')}}"
                       data-lightbox="salafitness">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 element" id="terzacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/artimarziali.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/artimarziali.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sala Arti Marziali</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Sala Arti Marziali--}}</h2>
                <p class="text-justify block-with-text">
                    Un’area dedicata dove poter provare in sicurezza tecniche di taekwondo (bambini), Kick boxing e Krav maga, che coniugano una buona ginnastica preparatoria all’utilità della loro pratica.
                    @for($i=0;$i<50;$i++)
                        &nbsp
                    @endfor
                </p>
                <p>
                    <a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salaartimarziali/01.jpg')}}"
                      data-lightbox="salaartimarziali">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaartimarziali/02.jpg')}}"
                       data-lightbox="salaartimarziali">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaartimarziali/03.jpg')}}"
                       data-lightbox="salaartimarziali">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->

        <div class="row" style="margin-top: 40px">
            <div class="col-lg-4 element" id="quartacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/funzionale.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/funzionale.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sala Funzionale</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Sala Funzionale--}}</h2>
                <p class="text-justify block-with-text">
                    La sua collocazione centrale rispetto alle altre attività fitness compatibili, è stata studiata per offrire il possibile immediato utilizzo delle tante attrezzature di questo vasto settore a chi ritenga proficuo combinare e/o integrare diverse tipologie di allenamento.

                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salafunzionale/01.jpg')}}"
                      data-lightbox="salafunzionale">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salafunzionale/02.jpg')}}"
                       data-lightbox="salafunzionale">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 element" id="quintacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/spinning.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/spinning.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sala Spinning</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Sala Spinning--}}</h2>
                <p class="text-justify block-with-text">
                    Dotata di schermatura insonorizzata, con specchi e giochi di luce all’interno. Le bike sono di marca technogym.
                    @for($i=0;$i<100;$i++)
                        &nbsp
                    @endfor
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salaspinning/01.jpg')}}"
                      data-lightbox="salaspinning">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaspinning/02.jpg')}}"
                       data-lightbox="salaspinning">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaspinning/03.jpg')}}"
                       data-lightbox="salaspinning">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 element" id="sestacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/baby.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/baby.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Baby Parking</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Baby Parking--}}</h2>
                <p class="text-justify block-with-text">
                    la palestra Body possiede una grande area gioco per bambini e propone un'importante iniziativa. Nei giorni di martedì e giovedì dalle ore 18:00 alle 19:30 tutti i genitori potranno portare i loro bimbi a divertirsi nell'area gioco "il Paese dei Balocchi" ed allenarsi in tutta tranquillità senza costi aggiuntivi.
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-secondary" href="{{route('baby.visualizza')}}" role="button">Vai &raquo;</a></p>
            </div><!-- /.col-lg-4 -->



        </div ><!-- /.row -->

        <div class="row">
            <div class="col-lg-4 element" id="settimacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/relax.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/relax.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Area Relax</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Area Relax--}}</h2>
                <p class="text-justify block-with-text">
                    Sauna finlandese quattro posti tradizionale, con braciere ed essenze. Doccia multifunzione con idromassaggio, cascata per la cervicale, cromoterapia, aromaterapia e bagno turco. Accessibile con passaggio diretto da entrambi gli spogliatoi uomini/donne.
                </p>
                <p>
                    <a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salarelax/01.jpg')}}"
                       data-lightbox="salarelax">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salarelax/02.jpg')}}"
                       data-lightbox="salarelax">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salarelax/03.jpg')}}"
                       data-lightbox="salarelax">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 element" id="ottavacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/relax.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/piscina.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Area Piscina</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Area Relax--}}</h2>
                <p class="text-justify block-with-text">
                    @for($i=0;$i<170;$i++)
                        &nbsp
                    @endfor
                </p>
                <p>
                    <a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salapiscina/02.jpg')}}"
                       data-lightbox="salapiscina">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapiscina/03.jpg')}}"
                       data-lightbox="salapiscina">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapiscina/04.jpg')}}"
                       data-lightbox="salapiscina">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapiscina/05.jpg')}}"
                       data-lightbox="salapiscina">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salapiscina/06.jpg')}}"
                       data-lightbox="salapiscina">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4 element" id="nonacarta">
                {{--<img class="rounded-circle" src="{{asset('images/schede/relax.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}

                <div class="item-hover circle effect18 bottom_to_top" style="margin: 0 auto">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/esterni.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Area Esterna</h3>
                                <p>{{--Description goes here--}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2>{{--Area Relax--}}</h2>
                <p class="text-justify block-with-text">
                    @for($i=0;$i<170;$i++)
                        &nbsp
                    @endfor
                </p>
                <p>
                    <a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/01.jpg')}}"
                       data-lightbox="salaesterna">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/02.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/03.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/04.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/05.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/06.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            {{--<div class="col-lg-4 d-flex align-items-start flex-column element" id="nonacarta">
                --}}{{--<img class="rounded-circle p-2" src="{{asset('images/schede/esterni.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}{{--

                <div class="item-hover circle effect18 bottom_to_top">
                    <a href="#">
                        <div class="img"><img src="{{asset('images/schede/esterni.jpg')}}" alt="img"></div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Area Esterna</h3>
                                <p>--}}{{--Description goes here--}}{{--</p>
                            </div>
                        </div>
                    </a>
                </div>

                <h2 class="mb-auto">--}}{{--Area Esterna--}}{{--</h2>
                <p id="orario"><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary mb-auto p-2" href="{{asset('images/salaesterna/01.jpg')}}"
                                  data-lightbox="salaesterna">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/02.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/03.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/04.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/05.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/06.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->--}}
        </div>

        <!-- START THE FEATURETTES -->

        <hr  class="featurette-divider">

        <div >
            <div  class="col-md-7" style="margin-top: -70px">
                <h2  class="featurette-heading">Orario Apertura</h2>
                <p class="lead">

                    <div class="card-deck ">

                        <div class="card bg-dark text-white" style="width: 18rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                                <li class="list-group-item bg-dark text-white">
                                    <p style="color: red; margin: 0 0 -5px -5px">Dal lunedì al giovedì</p>
                                    Dalle 09:00 Alle 22:30
                                </li>
                                <li class="list-group-item bg-dark text-white">
                                    <p style="color: red; margin: 0 0 -5px -5px">Venerdì</p>
                                    Dalle 09:00 Alle 22:00
                                </li>
                                <li class="list-group-item bg-dark text-white">
                                    <p style="color: red; margin: 0 0 -5px -5px">Sabato</p>
                                    Dalle 09:00 Alle 13:00<br>Dalle 16:00 Alle 20:00
                                </li>
                            </ul>
                        </div>

                        <div class="card bg-dark text-white" style="width: 18rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                                <li class="list-group-item bg-dark text-white">
                                    <p style="color: red; margin: 0 0 -5px -5px">From Monday to Thursday</p>
                                    Open 09:00 am - Close 10:30 pm
                                </li>
                                <li class="list-group-item bg-dark text-white">
                                    <p style="color: red; margin: 0 0 -5px -5px">Friday</p>
                                    Open 09:00 am - Close 10:00 pm
                                </li>
                                <li class="list-group-item bg-dark text-white">
                                    <p style="color: red; margin: 0 0 -5px -5px">Saturday</p>
                                    Open 09:00 am - Close 01:00 pm <br>Open 04:00 pm - Close 08:00 pm
                                </li>
                            </ul>

                        </div>

                    </div>

                </p>
            </div>

        </div>

        <hr class="featurette-divider">

    <div>
        <p id="mess"  style="border: solid green 1px; width: 200px; height: 50px; padding: 8px 0 0 25px; color: green; display: none;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

        </p>

    </div>

{{--    @if(count($errors))

        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}
    <div class="row featurette">

            <div id="blocmail" class="container col-xl-4 col-lg-4 col-md-6" style="margin: 10px 0" >
                <div class="card"  style="width: 100%; height: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <form>
                    <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">
                        <div class="card-body">
                            <div class="d-inline-block"><h5 class="card-title">Scrivici</h5></div>
                            </td>

                            {{--<div class="d-inline-block" style="float: right">
                                <button style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary">Invia</button>
                            </div>--}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="text-danger">Nome: </span>
                                <input required type="text" class="form-control" name="title" id="title">
                            </li>
                            <li class="list-group-item"><span class="text-danger">e-mail: </span>
                                <input required type="email" class="form-control" name="mailfrom" id="mailfrom">
                            </li>
                            <li class="list-group-item"><span class="text-danger">Messaggio: </span>
                                <textarea required name="content" id="content" rows="12" class="form-control"></textarea>
                            </li>
                            <li class="list-group-item">
                                <span style="float: left; font-size: .8rem">
                                    <input style="margin-right: 5px" type="checkbox" id="consenso" name="consenso" required>Ho letto l'Informativa sulla Privacy e acconsento al trattamento dei dati personali
                                </span>
                                <a title="Invia mail" id="inviamail" href="{{route('mail')}}" class="btn btn-primary not-active" style="  float: right; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    invia
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <div id="blocknews"  class="container col-xl-8 col-lg-8 col-md-6 " style="margin: 10px 0" >
                {{--<div  class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img class="card-img-top" src="{{asset("storage/".$news[0]->foto.$versione)}}" alt="">
                    <div class="card-body">
                        <div class="d-inline-block"><h5 class="card-title">Ultima novità</h5></div>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$news[0]->descrizione}}</li>
                        <li class="list-group-item">{{$news[0]->created_at->format('d M Y')}}</li>
                    </ul>
                </div>--}}
                <div class="row">
                    <div class="col-md-12">
                        <div  class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <img class="card-img-top" src="{{asset("storage/".$news[0]->foto.$versione)}}" alt="">
                            <div class="card-body">
                                <div class="d-inline-block"><h5 class="card-title">Ultima novità</h5></div>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$news[0]->descrizione}}</li>
                                <li class="list-group-item">{{$news[0]->created_at->format('d M Y')}}</li>
                            </ul>
                        </div>

                    </div>

                </div>


            </div>

        </div>



    <div class="row featurette">
        <div class="card-deck justify-content-center">
            @if(isset($news[1]->foto))
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img class="card-img-top " src="{{asset("storage/".$news[1]->foto.$versione)}}" >
                <div class="card-body">
                    {{--<h5 class="card-title">Card title</h5>--}}
                    <p class="card-text">{{$news[1]->descrizione}}</p>
                    <p class="card-text"><small class="text-muted">{{$news[1]->created_at->format('d M Y')}}</small></p>
                </div>
            </div>
            @endif
            @if(isset($news[2]->foto))
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img class="card-img-top" src="{{asset("storage/".$news[2]->foto.$versione)}}" >
                <div class="card-body">
                    {{--<h5 class="card-title">Card title</h5>--}}
                    <p class="card-text">{{$news[2]->descrizione}}</p>
                    <p class="card-text"><small class="text-muted">{{$news[2]->created_at->format('d M Y')}}</small></p>
                </div>
            </div>
            @endif
            @if(isset($news[3]->foto))
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img class="card-img-top" src="{{asset("storage/".$news[3]->foto.$versione)}}" >
                <div class="card-body">
                    {{--<h5 class="card-title">Card title</h5>--}}
                    <p class="card-text">{{$news[3]->descrizione}}</p>
                    <p class="card-text"><small class="text-muted">{{$news[3]->created_at->format('d M Y')}}</small></p>
                </div>
            </div>
                @endif
        </div>

            {{--<div class="row">
                <div class="col-md-5">
                    <div  class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="{{asset("storage/".$news[1]->foto.$versione)}}" alt="">
                        <div class="card-body">
                            <div class="d-inline-block"><h5 class="card-title"></h5></div>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$news[1]->descrizione}}</li>
                            <li class="list-group-item">{{$news[1]->created_at->format('d M Y')}}</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-5 ">
                    <div  class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="{{asset("storage/".$news[2]->foto.$versione)}}" alt="">
                        <div class="card-body">
                            <div class="d-inline-block"><h5 class="card-title"></h5></div>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$news[2]->descrizione}}</li>
                            <li class="list-group-item">{{$news[2]->created_at->format('d M Y')}}</li>
                        </ul>
                    </div>

                </div>
            </div>--}}




    </div>

    </div><!-- /.container -->

    <div class="row featurette" style="margin: 70px 50px 0 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6910.539885132717!2d11.961271991606226!3d43.261394658018844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bf95ee880ff89%3A0xb7349a3943a56b50!2sPalestra+Body+Line!5e0!3m2!1sit!2sit!4v1522417312218"  frameborder="2" style="border:0; width: 100%; height: 450px" allowfullscreen></iframe>
    </div>



    <div class="container" id="contatti" >
        <p class="float-right" ><a style="margin-bottom: -40px" id="tornasu" class="btn btn-success" href="#myCarousel">Back to top</a></p>
    </div>

@endsection


@section('footer')
    @parent
    <script>
        $('document').ready(function () {

            var altezza = $('#blocknews').css('height');

            $('#blocmail').css('height', 'altezza');

            $('#inviamail').on('click', function (ele) {
                ele.preventDefault();
                var urlAlbum =   $(this).attr('href');

                $.ajax(
                    urlAlbum,
                    {
                        method: 'POST',
                        dataType: 'json',
                        data : {
                            '_token' : $('#_token').val(),
                            'title' : $('#title').val(),
                            'mailfrom' : $('#mailfrom').val(),
                            'consenso' : $('#consenso').val(),
                            'content' : $('#content').val()
                        },
                        complete : function (resp) {
                            console.log(resp.responseText);
                            if(resp.responseText == 1){
                                $('#mess').fadeIn(2000);
                                $('#mess').html("Messaggio inviato");
                                $('#mess').fadeOut(3000);
                                $('#content').val("").attr("required", false);
                                $('#mailfrom').val("").attr("required", false);
                                $('#title').val("").attr("required", false);
                            } else {
                                var cc = JSON.parse(resp.responseText);
                                if(cc.errors.content){
                                    $('#mess').html(cc.errors.content + " <br> messaggio non inviato");
                                }
                                if(cc.errors.mailfrom){
                                    $('#mess').html(cc.errors.mailfrom + " <br> messaggio non inviato");
                                }
                                $('#mess').css("height", 80);
                                $('#mess').fadeIn(2000);
                                $('#mess').fadeOut(3000);
                            }
                        }
                    }
                )
            });
        });
    </script>

    <script>

        $("#consenso").change(function() {
            if(this.checked) {
                $("#inviamail").removeClass('not-active');
            }else{
                $("#inviamail").addClass('not-active');
            }
        });

    </script>

    <script>
        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    </script>

    <script >
        $(window).scroll(function(){
            var windowWidth = $(this).width();
            var windowHeight = $(this).height();
            var windowScrollTop = $(this).scrollTop();

            // effect 
            var thirdAnimation = function(){
                $('#tornasu').delay(1000).animate({opacity:1, bottom:0},'slow');
            };

            if(windowWidth<=549){
                if(windowScrollTop>3500){
                    thirdAnimation();

                }
            }else if(windowWidth>549 && windowWidth<=991){
                if(windowScrollTop>2200){
                    thirdAnimation();

                }
            }else{
                if(windowScrollTop>1600){
                    thirdAnimation();
                }
                /*if(windowScrollTop > ($("#primacarta").offset().top-250) && (windowScrollTop < ($("#primacarta").offset().top))) {
                    $("#primacarta").toggleClass('two');
                    $("#secondacarta").toggleClass('two');
                    $("#terzacarta").toggleClass('two');
                    $("#quartacarta").toggleClass('two');

                    $("#quintacarta").toggleClass('two');
                    $("#sestacarta").toggleClass('two');
                    $("#settimacarta").toggleClass('two');
                    $("#ottavacarta").toggleClass('two');
                }*/
            }
        });
        //# sourceURL=pen.js

    </script>

@endsection
