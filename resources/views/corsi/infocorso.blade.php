@extends('template.layout')
@section('content')
    <div id="cont" class="container" style="margin-top: 100px">
        <div class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row flex-lg-row">
                <div class="col-5">
                    <img style="margin: 5px 0 0 5px" class="card-img-top"  src="{{asset("storage/".$corso->foto)}}" alt="">
                </div>

                <div id="sopra" class="col-6 text-justify">
                    <p>
                        {{$corso->descrizione}}
                    </p>
                    <p>
                        @switch($corso->livello)
                        @case("Alta")
                        <img src="{{asset('images/alta.jpg')}}" alt="">
                        @break

                        @case("Media")
                        <img src="{{asset('images/media.jpg')}}" alt="">
                        @break

                        @case("Bassa")
                        <img src="{{asset('images/bassa.jpg')}}" alt="">
                        @break

                        @endswitch
                    </p>
                </div>
            </div>
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title">{{$corso->nome_corso}}</h5></div>
                <div class="d-inline-block" style="float: right"><button style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                <div id="sotto" class="card-text"></div>
            </div>
            <ul class="list-group list-group-flush">


                @if($corso->staff_id != 0)
                    <li class="list-group-item"><span class="text-danger">Trainer: </span>
                        <a href="{{route('staff.info', $corso->staff_id)}}">{{$corso->staffId->nome}}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    <script>
        function goBack() {
            window.history.back();
        }

        var windowWidth = $(window).width();

        if (windowWidth < 600)
        {
            $('#cont').css('margin-top',150);
            var testo = $('#sopra').html();
            $('#sopra').html('');
            $('#sotto').html(testo);
        }
    </script>
@stop