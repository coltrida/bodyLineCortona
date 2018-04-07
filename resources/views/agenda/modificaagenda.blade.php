@extends('template.layout')
@section('content')

    <div class="container" style="margin-top: 80px">

        <div class="row" style="width:100%;margin-bottom: 30px">
            <a class="nav-link" href="{{route('corso.inserisci')}}">
                <button type="button" class="btn btn-primary" style="width: 145px;height:60px; ">Inserisci Corso</button>
            </a>
            <a class="nav-link" href="{{route('corso.lista')}}">
                <button type="button" class="btn btn-primary" style="width: 145px;height:60px;">Elimina Corso</button>
            </a>
            <a class="nav-link" href="{{route('corso.modifica')}}">
                <button type="button" class="btn btn-primary" style="width: 145px;height:60px; ">Modifica Corso</button>
            </a>
            <a class="nav-link" href="">
                <button type="button" id="aggiungi" class="btn btn-primary" style="width: 145px;height:60px; ">Aggiungi orario</button>
            </a>
            <a class="nav-link" href="">
                <button type="button" id="elimina" class="btn btn-primary" style="width: 145px;height:60px; ">Elimina orario</button>
            </a>
            <a class="nav-link" href="{{route('agenda.resetta')}}">
                <button type="button" class="btn btn-primary" style="background-color:red; width: 145px;height:60px; ">Agenda resetta</button>
            </a>
        </div>

    <hr  class="featurette-divider" style="margin: 10px 0;">

        <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">

    <form action="{{route('agenda.inserisci')}}" method="POST">
        {{csrf_field()}}
        @include('agenda.partials.listacorsiselect')
        <div class="row justify-content-center" style="width: 100%; margin: 0 auto;">
            <input type="submit" id="btn_inserisci"  value="Inserisci" class="btn btn-primary" style="display:none; margin:10px 0; width: 165px;height:60px;">
        </div>

        @include('agenda.partials.tabellaselect')
    </form>
    </div>
@endsection

@section('footer')
    @parent
    <script>
        $('document').ready(function () {

            $('#aggiungi').on('click',function (ele) {
                ele.preventDefault();
                //$('.listacorsi').preventDefault();
                $('#btn_inserisci').show();
                $('.btn-dark').show();
                $('.form-check-input').show();

                $('.btn-danger').hide();


            });

            $('#elimina').on('click',function (ele) {
                $('#btn_inserisci').hide();
                $('.btn-dark').hide();
                $('.form-check-input').hide();

                $('.btn-danger').show();

                ele.preventDefault();
            });

            $('.btn-danger').on('click',function (ele) {
                ele.preventDefault();
                var urlelimina = $(this).attr('href');
                //alert(urlelimina);
                var li = ele.target.parentNode.parentNode.parentNode;
                $.ajax(
                    urlelimina,
                    {
                        method: 'DELETE',
                        data : {
                            '_token' : $('#_token').val()
                        },
                        complete : function () {
                            li.parentNode.removeChild(li);
                            // $(li).remove();

                        }
                    }
                )
            });


        });
    </script>
@endsection