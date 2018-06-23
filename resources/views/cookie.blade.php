@extends('template.layout')
@section('content')
    <div id="cont" class="container" style="margin-top: 80px; margin-bottom: 50px">

        <div class="card text-white bg-secondary mb-3">
            <div class="card-header"><h2>Privacy</h2></div>
            <div class="card-body">

                <p class="card-text text-justify">
                    Reg. UE 679/2016 e D.LGS 196/03

                    Bodyline Cortona, per garantire agli interessati la riservatezza e la tutela dei loro dati personali, ha attuato un sistema di protezione e controllo dei dati trattati, nel rispetto del Regolamento UE/679/2016 (GDPR) e del D. Lgs. 196/03 (Codice Privacy).
                </p>
            </div>
        </div>

        <div class="card text-white bg-secondary mb-3" style="margin-top: 40px">
            <div class="card-header"><h2>Cookie Policy</h2></div>
            <div class="card-body">

                <p class="card-text text-justify">
                    Informativa ex art. 13 Codice Privacy (D.lg. n. 196/03) per l’uso dei cookie <br>

                    I cookie sono piccoli file di testo che vengono creati dai siti web visitati e salvati nel computer dell’utente al fine di memorizzare informazioni di navigazione, preferenze, dati di profilo o altre informazioni. I cookie ci permettono di offrire all’utente un’esperienza di navigazione migliore. Alcuni sono necessari per il corretto funzionamento del sito, per gestire l’autenticazione e registrazione degli utenti o per raccogliere informazioni, in forma aggregata e anonima, sul numero degli utenti e su come questi visitano il sito (cookie tecnici). Il nostro sito utilizza inoltre cookie di terze parti per l’analisi delle statistiche sui visitatori del sito (Google Analytics).
                    <br>
                    E’ possibile bloccare l’installazione di tutti o solamente di alcuni cookie intervenendo sulle impostazioni del browser in uso; è bene notare che questo potrebbe però rendere inutilizzabili alcune funzioni del sito qualora si bloccassero cookie indispensabili per il suo funzionamento. La procedura varia leggermente a seconda del tipo di browser utilizzato. Per le istruzioni relative ai principali browser, rimandiamo ai seguenti link:
                    <ul>
                        <li><a style="color: white;" target="_blank" href="https://support.microsoft.com/it-it/products/windows?os=windows-10">Microsoft Internet Explorer</a></li>
                        <li><a style="color: white;" target="_blank" href="https://support.google.com/accounts/answer/61416?hl=it">Google Chrome</a></li>
                        <li><a style="color: white;" target="_blank" href="https://support.apple.com/kb/PH19214?locale=it_IT">Apple Safari</a></li>
                        <li><a style="color: white;" target="_blank" href="https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie">Mozilla Firefox</a></li>
                    </ul>
                </p>
            </div>
        </div>


    </div>

@endsection

@section('footer')
    @parent
    <script>
        var windowWidth = $(window).width();
        if (windowWidth < 600)
        {
            $('#cont').css('margin-top',160);
        }
    </script>
@stop