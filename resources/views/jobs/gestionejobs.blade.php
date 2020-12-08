@extends('template.layout')
@section('content')

    <div class="container" style="margin-top: 80px">

        <div class="card bg-dark text-white" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Inserisci Jobs</h3>
            </div>
            <form action="{{route('jobs.inserisci')}}" id="forminsjob" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                <ul id="lista" class="list-group list-group-flush">

                    <li  class="list-group-item bg-dark text-white">
                        <div  class="row">
                            <div class="col-sm">
                                <label>Titolo Jobs</label><br>
                                <input type="text" name="titolo" id="titolo" class="form-control">
                            </div>

                        </div>
                    </li>

                    <li  class="list-group-item bg-dark text-white">
                        <div  class="row">
                            <div class="col-sm">
                                <label>Testo Jobs</label><br>
                                <textarea name="testo" id="testo" class="form-control"></textarea>
                            </div>

                        </div>
                    </li>

                </ul>

                <div class="card-body">
                    <button id="btn_inserisci" class="btn btn-primary">Inserisci</button>
                </div>
            </form>
        </div>

        <div class="card bg-dark text-white" style="margin-top:30px; width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Lista Jobs</h3>
            </div>

            <div style="width: 95%">
                <table id="tabella" class="table table-striped table-bordered" style="margin-left: 30px">
                    <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Testo</th>
                        <th scope="col">Data</th>
                        <th scope="col">Elimina</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>

                </table>
            </div>
        </div>


    </div>
@endsection

@section('footer')
    @parent
    <script>
        $('document').ready(function () {
            $('#titolo').val('');
            $('#testo').val('');
            caricajobs();


            $('#btn_inserisci').on('click', function (ele) {
                ele.preventDefault();
                var url = $('#forminsjob').attr('action');
                $.ajax(url,
                    {
                        method: 'POST',
                        data: {
                            '_token': $('#_token').val(),
                            'titolo': $('#titolo').val(),
                            'testo': $('#testo').val()
                        },
                        complete: function (resp) {
                            //console.log(resp.responseText);
                            $('#titolo').val('');
                            $('#testo').val('');

                            caricajobs();
                        }
                    });
            });

            function caricajobs() {
                var linkcarica = '{{ route('jobs.lista') }}';
                $('#tabella tbody').html('');
                $.ajax(linkcarica,
                    {
                        method: 'GET',
                        complete: function (resp) {
                            //console.log(resp.responseText);
                            if((resp.responseJSON.jobs).length > 0){
                                for (var k = 0; k < (resp.responseJSON.jobs).length; k++){
                                    var id = resp.responseJSON.jobs[k].id;
                                    var titolo = resp.responseJSON.jobs[k].titolo;
                                    var testo = resp.responseJSON.jobs[k].testo;
                                    var data = resp.responseJSON.jobs[k].created_at;

                                    var prelinkeliminapre = '{{ route('jobs.elimina', ":id") }}';
                                    var linkeliminapre = prelinkeliminapre.replace(':id', id);

                                    $('#tabella tbody').append('<tr id="p'+id+'"><td>'+titolo+'</td><td>'+testo+'</td><td>'+data+'</td><td><a id="'+id+'" title="Delete Prenotazione" href="'+linkeliminapre+'" class="btn btn-danger deljob"><i class="fa fa-minus-square"></i></a></td></tr>');
                                }
                            }

                            $('.deljob').on('click', function (ele) {
                                ele.preventDefault();
                                //alert(ele);
                                var urldel = ($(this).attr('href'));
                                //alert(urlpredel);

                                var td = ($(this).attr('id'));
                                //alert(td);
                                $.ajax(urldel,
                                    {
                                        method: 'GET',
                                        data : {
                                            '_token' : $('#_token').val()
                                        },
                                        complete : function (resp) {
                                            console.log(resp);
                                            if(resp.responseText == 1){
                                                //alert('ok');
                                                //alert(resp.responseText);
                                                $('#p' + td).remove();
                                                //td.parentNode.removeChild(td);        //QUESTO è CON JAVASCRIPT
                                                // $(li).remove();                     //QUESTO è CON JQUERY
                                            }else{
                                                alert('problemi');
                                            }
                                        }
                                    })
                            });

                        }
                    });
            }

        });
    </script>
@endsection