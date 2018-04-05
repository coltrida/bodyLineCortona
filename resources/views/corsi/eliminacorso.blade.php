@extends('template.layout')
@section('content')

    <div class="container" style="margin-top: 80px">

        <div class="row" style="margin-bottom: 30px">
            <h2>Seleziona il corso da eliminare</h2>
        </div>

        @include('agenda.partials.listacorsi')

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div>
            <button class="btn btn-primary" onclick="goBack()">Go Back</button>
        </div>
    </div>

@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>