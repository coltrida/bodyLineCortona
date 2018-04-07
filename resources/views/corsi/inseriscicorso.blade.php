@extends('template.layout')
@section('content')

    <?php $pagina = 'inserimento' ?>

    <div class="container" style="margin-top: 50px">

        <div class="row" style="margin-bottom: 30px">
            <h2>Corsi già presenti</h2>
        </div>

        @include('agenda.partials.listacorsi')

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div class="card" style="width: 100%;">
            <form action="{{route('corso.salva')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="d-inline-block"><h5 class="card-title">
                            <label>Nome Corso</label><br>
                            <input type="text" required name="nomecorso" class="form-control" value="">
                        </h5>
                    </div>
                    <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                    {{--<p class="card-text"></p>--}}
                </div>

                @include('corsi.partials.formcorso')


            </form>
        </div>
    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>