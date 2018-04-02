@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 50px">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{asset($staff->foto)}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title">{{$staff->nome}}</h5></div>
                <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$staff->descrizione}}</li>
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