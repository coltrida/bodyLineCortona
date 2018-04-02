@extends('template.layout')
@section('content')

<div class="container" style="margin-top: 40px">

    <div class="row">
        @foreach($staff as $ele)
            <div class="col-md-4 col-sm-4 col-lg-4" style="margin: 75px">
                {{--<img  class="img-fluid img-thumbnail" width="250" alt="{{$ele->name}}"  src="{{asset($ele->foto)}}">--}}
                <a href="{{route('info.staff', $ele->id)}}">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="{{asset($ele->foto)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><h3>{{$ele->nome}}</h3></h5>
                            {{--<p class="card-text">"{{$ele->descrizione}}"</p>--}}

                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection