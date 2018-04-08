@extends('template.layout')
@section('content')

    <div id="myCarousel" class="carousel slide" style="height: 600px" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 600px">
            <div class="carousel-item active" style="height: 600px">

                <img class="first-slide" src="{{asset('images/principal/prima.jpg')}}" style="height: 600px" alt="First slide">
                <div class="container">

                    <div class="carousel-caption text-left">
                        <h1></h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
                <img class="second-slide" src="{{asset('images/principal/seconda.jpg')}}" alt="Second slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
                <img class="third-slide" src="{{asset('images/principal/terza.jpg')}}" alt="Third slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1></h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Scopri</a></p>
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
                    <button type="button" class="btn btn-dark" style="width: 160px;height:60px; margin:0 12px">Gestione Corsi</button>
                </a>
                <a class="nav-link" href="{{route('listino.modifica')}}">
                    <button type="button" class="btn btn-dark" style="width: 160px;height:60px;margin:0 12px">Gestione Listino</button>
                </a>
                <a class="nav-link" href="{{route('news.inserisci')}}">
                    <button type="button" class="btn btn-dark" style="width: 160px;height:60px; margin:0 12px">Gestione News</button>
                </a>
                <a class="nav-link" href="{{route('staff.modifica')}}">
                    <button type="button" class="btn btn-dark" style="width: 160px;height:60px; margin:0 12px">Gestione Staff</button>
                </a>
                <a class="nav-link" href="">
                    <button type="button" class="btn btn-dark" style="width: 160px;height:60px; margin:0 12px">Paese dei Balocchi</button>
                </a>
            </div>
        @endif

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/salapesi.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Pesi</h2>
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

            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/fitnessmusicale.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Fitness</h2>
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

            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/artimarziali.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Arti Marziali</h2>
                <p class="text-justify block-with-text">
                    Un’area dedicata dove poter provare in sicurezza tecniche di taekwondo (bambini), Kick boxing e Krav maga, che coniugano una buona ginnastica preparatoria all’utilità della loro pratica.
                    @for($i=0;$i<50;$i++)
                        &nbsp
                    @endfor
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salaartimarziali/01.jpg')}}"
                      data-lightbox="salaartimarziali">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaartimarziali/02.jpg')}}"
                       data-lightbox="salaartimarziali">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/funzionale.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Funzionale</h2>
                <p class="text-justify block-with-text">
                    La sua collocazione centrale rispetto alle altre attività fitness compatibili, è stata studiata per offrire il possibile immediato utilizzo delle tante attrezzature di questo vasto settore a chi ritenga proficuo combinare e/o integrare diverse tipologie di allenamento.
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salafunzionale/01.jpg')}}"
                      data-lightbox="salafunzionale">
                        Foto &raquo;
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row" style="margin-top: 40px">
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/spinning.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Spinning</h2>
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

            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/baby.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Baby Parking</h2>
                <p class="text-justify block-with-text">
                    la palestra Body possiede una grande area gioco per bambini e propone un'importante iniziativa. Nei giorni di martedì e giovedì dalle ore 18:00 alle 19:30 tutti i genitori potranno portare i loro bimbi a divertirsi nell'area gioco "il Paese dei Balocchi" ed allenarsi in tutta tranquillità senza costi aggiuntivi.
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-secondary" href="{{route('baby.visualizza')}}" role="button">Vai &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/relax.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Area Relax</h2>
                <p class="text-justify block-with-text">
                    Sauna finlandese quattro posti tradizionale, con braciere ed essenze. Doccia multifunzione con idromassaggio, cascata per la cervicale, cromoterapia, aromaterapia e bagno turco. Accessibile con passaggio diretto da entrambi gli spogliatoi uomini/donne.
                </p>
                <p><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salarelax/01.jpg')}}"
                      data-lightbox="salarelax">
                        Foto &raquo;
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/esterni.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Area Esterna</h2>
                <p class="text-justify block-with-text">
                    @for($i=0;$i<200;$i++)
                        &nbsp
                    @endfor
                </p>
                <p id="orario"><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/01.jpg')}}"
                      data-lightbox="salaesterna">
                        Foto &raquo;
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/02.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                    <a hidden role="button" class="btn btn-secondary" href="{{asset('images/salaesterna/03.jpg')}}"
                       data-lightbox="salaesterna">
                    </a>
                </p>
            </div><!-- /.col-lg-4 -->

        </div ><!-- /.row -->

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

        <div class="row featurette">

            <div class="container col-xl-8 col-lg-8 col-md-8 "  >
                <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img class="card-img-top" src="{{asset($news->path)}}" alt="">
                    <div class="card-body">
                        <div class="d-inline-block"><h5 class="card-title">Ultima novità</h5></div>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$news->descrizione}}</li>
                        <li class="list-group-item">{{$news->created_at->format('d M Y')}}</li>
                    </ul>
                </div>
            </div>

            {{--<div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" >
            </div>--}}
        </div>
    </div><!-- /.container -->

    <div class="row featurette" style="margin: 70px 50px 0 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6910.539885132717!2d11.961271991606226!3d43.261394658018844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bf95ee880ff89%3A0xb7349a3943a56b50!2sPalestra+Body+Line!5e0!3m2!1sit!2sit!4v1522417312218"  frameborder="2" style="border:0; width: 100%; height: 450px" allowfullscreen></iframe>
    </div>

    <footer class="container" id="contatti" >
        <p class="float-right" ><a href="#top">Back to top</a></p>
    </footer>

@endsection
