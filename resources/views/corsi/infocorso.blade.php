@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <img class="card-img-top" style="width: 800px" src="{{asset("storage/".$corso->foto)}}" alt="">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title">{{$corso->nome_corso}}</h5></div>
                <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$corso->descrizione}}</li>
                <li class="list-group-item"><span class="text-danger">Intensità: </span>{{$corso->livello}}</li>
                @if($corso->staff_id != 0)
                    <li class="list-group-item"><span class="text-danger">Trainer: </span>
                        <a href="{{route('staff.info', $corso->staff_id)}}">{{$corso->staffId->nome}}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>