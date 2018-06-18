@extends('template.layout')
@section('content')

<div class="container" style="margin-top: 70px">

    <div class="row justify-content-center" id="cont">
        @foreach($staff as $ele)
            <div class="col-md-3 col-sm-5 col-lg-3" style="margin: 15px">
                {{--<img  class="img-fluid img-thumbnail" width="250" alt="{{$ele->name}}"  src="{{asset($ele->foto)}}">--}}
                <a href="{{route('staff.info', $ele->id)}}">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="{{asset("storage/".$ele->foto)}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title"><h4 class="nome">
                                    {{$ele->nome}}</h4></h6>
                            {{--<p class="card-text">"{{$ele->descrizione}}"</p>--}}

                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('footer')
    @parent
    <script>
        var windowWidth = $(window).width();
        if (windowWidth < 800)
        {
            $('#cont').css('margin-top',130);
            $('.nome').css('font-size',18);
        }
    </script>
@stop