@extends('template.layout')
@section('content')
    <div  class="container" style="margin-top: 80px">
        <div id="cont" class="card" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
           <div class="row flex-lg-row">
            <div class="col-5">
                <img style="margin: 5px 0 0 5px" class="card-img-top" src="{{asset("storage/".$staff->foto)}}" alt="Card image cap">
            </div>
            <div class="col-6 text-justify">
                <p id="sopra">
                    {{$staff->descrizione}}
                </p>
            </div>
           </div>
            <div class="card-body">
                <div class="d-inline-block"><h5 class="card-title">{{$staff->nome}}</h5></div>
                <div class="d-inline-block" style="float: right"><button style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                <p id="sotto" class="card-text"></p>
            </div>

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