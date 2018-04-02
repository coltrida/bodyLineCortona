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
{{--                        <div class="d-inline">{{$ele->nome}}</div>
                        <div class="d-inline">{{$ele->descrizione}}</div>
                        <div class="d-inline">{{$ele->prezzo}}</div>--}}
                    </li>
                @endforeach
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