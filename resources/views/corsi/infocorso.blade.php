@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 50px">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{asset($corso->foto)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$corso->nome_corso}}</h5>
                <p class="card-text">{{$corso->descrizione}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="text-danger">Livello: </span>{{$corso->livello}}</li>
                <li class="list-group-item"><span class="text-danger">Trainer: </span></li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
@endsection