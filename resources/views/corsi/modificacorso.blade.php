@extends('template.layout')
@section('content')

    <?php $pagina = 'modifica' ?>

    <div class="container" style="margin-top: 80px">

        <div class="row" style="margin-bottom: 30px">
            <h2>Seleziona il corso da modificare</h2>
        </div>

        <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">
        @include('agenda.partials.listacorsi')

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div class="card" style="width: 100%;">
            <form action="{{route('corso.patch')}}"  method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="idcorso" id="idcorso">

                <div class="card-body">
                    <div class="d-inline-block"><h5 class="card-title">
                            <label>Nome Corso</label><br>
                            <input type="text" required name="nomecorso" id="nomecorso" class="form-control" value="">
                        </h5></div>
                    <div class="d-inline-block" style="float: right">
                        <a  href="{{route('agenda.modifica')}}">
                            <button type="button" class="btn btn-primary" style="width: 90px;height:40px; ">Go Back</button>
                        </a>
                    </div>
                    {{--<p class="card-text"></p>--}}
                </div>

                @include('corsi.partials.formcorso')

            </form>
        </div>

    </div>

@endsection

@section('footer')
    @parent
    <script>
        $('document').ready(function () {

            $('.listacorsi').on('click',function (ele) {
                ele.preventDefault();
                //alert(ele.target.parentNode.parentNode.parentNode);
                var urlcorso = $(this).attr('id');

                $.ajax(
                    urlcorso,
                    {
                        data : {
                            '_token' : $('#_token').val()
                        },
                        complete : function (resp) {
                            var oggetto = JSON.parse(resp.responseText);
                            //console.log(oggetto.livello);
                            $('#idcorso').val(oggetto.id);
                            $('#nomecorso').val(oggetto.nome_corso);
                            $('#testo').val(oggetto.descrizione);
                            if(oggetto.livello == 'Bassa')
                            {
                                $("#bassa").attr('selected', 'selected');
                            } else
                                    if(oggetto.livello == 'Media')
                                    {
                                        $("#media").attr('selected', 'selected');
                                    } else
                                            if(oggetto.livello == 'Alta')
                                            {
                                                $("#alta").attr('selected', 'selected');
                                            }
                            //var radios = $('input:radio[name=colore]');
                            //radios.filter('[value=#000099]').attr('checked', true);
                            //$("inlineRadio1").attr("checked");

                        }
                    }
                )

            });



        });
    </script>
@endsection