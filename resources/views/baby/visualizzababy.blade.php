@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 80px">
        <h2>Baby Parking - Attività e iniziative Stagione 2017/18</h2>

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <img class="card-img-top" src="{{asset('images/baby/01.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title"></h5></div>
                <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-justify">
                    la palestra Body possiede una grande area gioco per bambini e propone un'importante iniziativa. Nei giorni di martedì e giovedì dalle ore 18:00 alle 19:30 tutti i genitori potranno portare i loro bimbi a divertirsi nell'area gioco "il Paese dei Balocchi" ed allenarsi in tutta tranquillità senza costi aggiuntivi.
                </li>
                <li class="list-group-item text-justify">
                    Il servizio di baby parking è gratuito e compreso nel prezzo dell'abbonamento in palestra.

                    Mamme e papà non avete più scuse.
                </li>

            </ul>
        </div>

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <img class="card-img-top" src="{{asset('images/baby/02.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title"></h5></div>
                <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-justify">
                    Facepainting, giochi gonfiabili, sculture di palloncini, zucchero filato e molte altre attività possono essere richieste per rendere la vostra festa unica ed indimenticabile!
                </li>
                <li class="list-group-item text-justify">
                    Lo spazio bimbi della palestra Body può essere affittato per feste private e compleanni.

                    Moltissime sono le proposte di intrattenimento che lo staff del Paese dei Balocchi propone.
                </li>
            </ul>
        </div>

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <img class="card-img-top" src="{{asset('images/baby/03.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title"></h5></div>
                <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item text-justify">
                    Tantissimi sono i corsi e le iniziative per coinvolgere i più piccoli, TAEKWONDO, ATLETICA E MINIATLETICA, AIUTO COMPITI, FESTE A TEMA.

                    Rivolgetevi alla reception del centro fitness per avere informazioni dettagliate su orari, insegnanti, eventi e costi.
                </li>
            </ul>
        </div>

    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>