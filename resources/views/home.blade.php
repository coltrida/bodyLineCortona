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
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
                <img class="second-slide" src="{{asset('images/principal/seconda.jpg')}}" alt="Second slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
                <img class="third-slide" src="{{asset('images/principal/terza.jpg')}}" alt="Third slide" style="height: 600px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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

    <div class="container marketing" id="two">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/salapesi.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Pesi</h2>
                <p class="text-justify block-with-text">
                    Tantissime macchine per allenare ogni muscolo in maniera selettiva. Tra le più grandi presenti nel territorio. In questi spazi è sempre presente un istruttore che mostra, controlla e corregge gli esercizi agli utenti, dopo avergli gratuitamente impostato un primo percorso di fitness a seguito di un iniziale breve colloquio.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/fitnessmusicale.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Fitness</h2>
                <p class="text-justify block-with-text">
                    Di giorno le ampie vetrate che danno sui giardini conferiscono a questa sala una luminosità che invita al movimento.
                    La sera il bianco del soffitto e delle pareti diventa l’ideale sfondo per luci soffuse che colorano l’ambiente rendendo piacevole lo svolgimento delle varie attività ginnico motorie, lezioni di gruppo o musicali proposte nell’orario corsi.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
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
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/funzionale.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Funzionale</h2>
                <p class="text-justify block-with-text">
                    La sua collocazione centrale rispetto alle altre attività fitness compatibili, è stata studiata per offrire il possibile immediato utilizzo delle tante attrezzature di questo vasto settore a chi ritenga proficuo combinare e/o integrare diverse tipologie di allenamento.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
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
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/baby.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Baby Parking</h2>
                <p class="text-justify block-with-text">
                    la palestra Body possiede una grande area gioco per bambini e propone un'importante iniziativa. Nei giorni di martedì e giovedì dalle ore 18:00 alle 19:30 tutti i genitori potranno portare i loro bimbi a divertirsi nell'area gioco "il Paese dei Balocchi" ed allenarsi in tutta tranquillità senza costi aggiuntivi.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/relax.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Area Relax</h2>
                <p class="text-justify block-with-text">
                    Sauna finlandese quattro posti tradizionale, con braciere ed essenze. Doccia multifunzione con idromassaggio, cascata per la cervicale, cromoterapia, aromaterapia e bagno turco. Accessibile con passaggio diretto da entrambi gli spogliatoi uomini/donne.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/esterni.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Area Esterna</h2>
                <p class="text-justify block-with-text">
                    @for($i=0;$i<200;$i++)
                        &nbsp
                    @endfor
                </p>
                <p id="orario"><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
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
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" >
            </div>
        </div>
    </div><!-- /.container -->

    <div class="row featurette" style="margin: 70px 50px 0 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6910.539885132717!2d11.961271991606226!3d43.261394658018844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bf95ee880ff89%3A0xb7349a3943a56b50!2sPalestra+Body+Line!5e0!3m2!1sit!2sit!4v1522417312218" width="1400" height="450" frameborder="2" style="border:0" allowfullscreen></iframe>
    </div>

    <footer class="container" id="three" >
        <p class="float-right" ><a href="#top">Back to top</a></p>
    </footer>

@endsection
