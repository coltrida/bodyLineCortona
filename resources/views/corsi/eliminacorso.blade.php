@extends('template.layout')
@section('content')

    <div class="container" style="margin-top: 80px">

        <div class="row" style="margin-bottom: 30px">
            <h2>Seleziona il corso da eliminare</h2>
        </div>

        <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">
        @include('agenda.partials.listacorsi')

        <hr  class="featurette-divider" style="margin: 40px 0;">

        <div>
            <a  href="{{route('agenda.modifica')}}">
                <button type="button" class="btn btn-primary" style="width: 90px;height:40px; ">Go Back</button>
            </a>
        </div>

    </div>

@endsection

@section('footer')
    @parent
    <script>
        $('document').ready(function () {

            $('.nav-link').on('click',function (ele) {
                ele.preventDefault();
                //alert(ele.target.parentNode.parentNode.parentNode);
                var urlcorso = $(this).attr('href');

                var li = ele.target.parentNode;
                //alert(li);
                $.ajax(
                    urlcorso,
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