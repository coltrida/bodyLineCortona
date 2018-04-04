@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 80px">

        <div class="card bg-dark text-white" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Listino Prezzi</h3>

            </div>
            <ul class="list-group list-group-flush">
                @foreach($listino as $ele)
                    <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col-sm" style="margin-left: 120px">
                                {{$ele->nome}}
                            </div>
                            <div class="col-sm">
                                {{$ele->descrizione}}
                            </div>
                            <div class="col-sm">
                                {{$ele->prezzo}} euro
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="card-body">

                <button class="btn btn-primary" onclick="goBack()">Go Back</button>
            </div>
        </div>


        <div class="card bg-dark text-white" style="margin-top:40px;width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Regolamento</h3>

            </div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item bg-dark text-white text-justify">
                    Per 2 persone dello stesso nucleo familiare è previsto uno sconto del 15% se le persone sono 3 si applica uno
                    sconto aggiuntivo del 5%.
                </li>
                <li class="list-group-item bg-dark text-white text-justify">
                    Per il badge che abilità all’ingresso viene richiesta una cauzione di euro 5 che verrà restituita alla riconsegna della
                    tessera purchè non rovinata e comunque in buone condizioni.
                </li>
                <li class="list-group-item bg-dark text-white text-center">
                    <h3>Non sono previsti ingressi e/o sedute di prova.</h3>
                </li>
                <li class="list-group-item bg-dark text-white text-justify">
                    Chi deciderà di avvalersi delle prestazioni del Personal Traine per un minimo di 8 lezioni mensili, potrà usufruire
                    per tutto quel periodo della riduzione del 50% nel normale abbonamento della Palestra. Sedute occasionali o al di
                    sotto del limite minimo suddetto non danno diritto ad alcuna convenzione.
                </li>
                <li class="list-group-item bg-dark text-white text-justify">
                    Le lezioni ed i corsi di gruppo presenti nel programma settimanale salvo specifica indicazione sono tutti compresi
                    nella quota di abbonamento. Essi potranno essere cambiati come attività proposta, eseguiti da istruttori diversi,
                    soppressi o spostati di orario, con decisione unilaterale dalla direzione.
                </li>
                <li class="list-group-item bg-dark text-white text-justify">
                    La direzione può applicare tariffe diverse o agevolate in ogni singolo caso che ritiene meritare di un trattamento
                    particolare. Su richiesta saranno valutate esigenze, problemi e quanto altro possa essere preso in considerazione
                    al fine di trovare il giusto equilibrio tra servizi erogati e quota di abbonamento.
                </li>
                <li class="list-group-item bg-dark text-white text-justify">
                    Sebbene una visita medica prima di cominciare l’attività e l’esercizio fisico sia consigliata,
                    <u>non è necessario presentare alcun certificato medico.</u>
                </li>
                <li class="list-group-item bg-dark text-white text-justify">
                    Come clienti di questa struttura oltre le quote in tabella non vi sono ulteriori iscrizioni da pagare.
                </li>

            </ul>
            <div class="card-body">

                <button class="btn btn-primary" onclick="goBack()">Go Back</button>
            </div>
        </div>

    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>