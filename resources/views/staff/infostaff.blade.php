@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <img class="card-img-top" src="{{asset("storage/".$staff->foto)}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title">{{$staff->nome}}</h5></div>
                <div class="d-inline-block" style="float: right"><button style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                {{--<p class="card-text"></p>--}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$staff->descrizione}}</li>
            </ul>
        </div>
    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>