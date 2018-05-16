@extends('template.layout')
@section('content')
    <div id="cont" class="container" style="margin-top: 80px">
        <h2>Baby Parking - Attività e iniziative Stagione 2017/18</h2>

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div id="cont" class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row flex-lg-row">
                <div class="col-6">
                    <img style="margin: 5px 0 0 5px" class="card-img-top" src="{{asset('images/baby/01.jpg')}}" alt="Card image cap">
                </div>
                <div id="sopra1" class="col-5 text-justify" style="margin: 20px">
                    <p >
                        La palestra Body possiede una grande area gioco per bambini e propone un'importante iniziativa. Nei giorni di martedì e giovedì dalle ore 18:00 alle 19:30 tutti i genitori potranno portare i loro bimbi a divertirsi nell'area gioco "il Paese dei Balocchi" ed allenarsi in tutta tranquillità senza costi aggiuntivi.
                    </p>
                    <p >
                        Il servizio di baby parking è gratuito e compreso nel prezzo dell'abbonamento in palestra.

                        Mamme e papà non avete più scuse.
                    </p>
                </div>
            </div>
            <div class="card-body">
                <div class="d-inline-block" style="float: right"><button style="margin-left: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                <div id="sotto1" class="card-text" style="text-align: justify"></div>
            </div>

        </div>

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div id="cont" class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row flex-lg-row">

                <div id="sopra2" class="col-5 text-justify" style="margin: 20px">
                    <p >
                        Facepainting, giochi gonfiabili, sculture di palloncini, zucchero filato e molte altre attività possono essere richieste per rendere la vostra festa unica ed indimenticabile!
                    </p>
                    <p >
                        Lo spazio bimbi della palestra Body può essere affittato per feste private e compleanni.

                        Moltissime sono le proposte di intrattenimento che lo staff del Paese dei Balocchi propone.
                    </p>
                </div>
                <div class="col-6">
                    <img style="margin: 5px 0 0 5px" class="card-img-top" src="{{asset('images/baby/02.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <div class="card-body">
                <div class="d-inline-block" style="float: right"><button style="margin-left: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                <p id="sotto2" class="card-text" style="text-align: justify"></p>
            </div>

        </div>


        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div id="cont" class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row flex-lg-row">
                <div class="col-6">
                    <img style="margin: 5px 0 0 5px" class="card-img-top" src="{{asset('images/baby/03.jpg')}}" alt="Card image cap">
                </div>
                <div id="sopra3" class="col-5 text-justify" style="margin: 20px">
                    <p >
                        Tantissimi sono i corsi e le iniziative per coinvolgere i più piccoli, TAEKWONDO, ATLETICA E MINIATLETICA, AIUTO COMPITI, FESTE A TEMA.

                        Rivolgetevi alla reception del centro fitness per avere informazioni dettagliate su orari, insegnanti, eventi e costi.

                    </p>

                </div>
            </div>
            <div class="card-body">
                <div class="d-inline-block" style="float: right"><button style="margin-left: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                <p id="sotto3" class="card-text" style="text-align: justify"></p>
            </div>

        </div>


    </div>
@endsection

@section('footer')
    @parent
    <script>
        function goBack() {
            window.history.back();
        }

        var windowWidth = $(window).width();

        if (windowWidth < 600)
        {
            $('#cont').css('margin-top',160);

            var testo1 = $('#sopra1').html();
            $('#sopra1').html('');
            $('#sotto1').html(testo1);

            var testo2 = $('#sopra2').html();
            $('#sopra2').html('');
            $('#sotto2').html(testo2);

            var testo3 = $('#sopra3').html();
            $('#sopra3').html('');
            $('#sotto3').html(testo3);
        }
    </script>
@stop