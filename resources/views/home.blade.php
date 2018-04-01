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
                <p class="text-justify">
                    Tantissime macchine per allenare ogni muscolo in maniera selettiva. Tra le più grandi presenti nel territorio. In questi spazi è sempre presente un istruttore che mostra, controlla e corregge gli esercizi agli utenti, dopo avergli gratuitamente impostato un primo percorso di fitness a seguito di un iniziale breve colloquio.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/fitnessmusicale.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Fitness</h2>
                <p class="text-justify">
                    Di giorno le ampie vetrate che danno sui giardini conferiscono a questa sala una luminosità che invita al movimento.
                    La sera il bianco del soffitto e delle pareti diventa l’ideale sfondo per luci soffuse che colorano l’ambiente rendendo piacevole lo svolgimento delle varie attività ginnico motorie, lezioni di gruppo o musicali proposte nell’orario corsi.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/artimarziali.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Arti Marziali</h2>
                <p class="text-justify">
                    Un’area dedicata dove poter provare in sicurezza tecniche di taekwondo (bambini), Kick boxing e Krav maga, che coniugano una buona ginnastica preparatoria all’utilità della loro pratica.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/funzionale.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Funzionale</h2>
                <p class="text-justify">
                    La sua collocazione centrale rispetto alle altre attività fitness compatibili, è stata studiata per offrire il possibile immediato utilizzo delle tante attrezzature di questo vasto settore a chi ritenga proficuo combinare e/o integrare diverse tipologie di allenamento.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row" style="margin-top: 40px">
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/spinning.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Sala Spinning</h2>
                <p class="text-justify">
                    Dotata di schermatura insonorizzata, con specchi e giochi di luce all’interno. Le bike sono di marca technogym.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/baby.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Baby Parking</h2>
                <p class="text-justify">
                    la palestra Body possiede una grande area gioco per bambini e propone un'importante iniziativa. Nei giorni di martedì e giovedì dalle ore 18:00 alle 19:30 tutti i genitori potranno portare i loro bimbi a divertirsi nell'area gioco "il Paese dei Balocchi" ed allenarsi in tutta tranquillità senza costi aggiuntivi.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/relax.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Area Relax</h2>
                <p class="text-justify">
                    Sauna finlandese quattro posti tradizionale, con braciere ed essenze. Doccia multifunzione con idromassaggio, cascata per la cervicale, cromoterapia, aromaterapia e bagno turco. Accessibile con passaggio diretto da entrambi gli spogliatoi uomini/donne.
                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="{{asset('images/schede/esterni.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Area Esterna</h2>
                <p class="text-justify">

                </p>
                <p><a class="btn btn-secondary" href="#" role="button">Foto &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
        </div>
    </div><!-- /.container -->

@endsection
