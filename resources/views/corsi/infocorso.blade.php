@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 50px">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{asset($corso->foto)}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title">{{$corso->nome_corso}}</h5></div>
                <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$corso->descrizione}}</li>
                <li class="list-group-item"><span class="text-danger">Livello: </span>{{$corso->livello}}</li>
                <li class="list-group-item"><span class="text-danger">Trainer: </span></li>
            </ul>
        </div>
    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>