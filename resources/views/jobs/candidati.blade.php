@extends('template.layout')
@section('content')
    <div id="cont" class="container" style="margin-top: 80px; margin-bottom: 50px">

        <div class="card text-white bg-secondary mb-3" style="margin-top: 40px">
            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error )
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-header"><h2>Candidati per: {{$job->titolo}}</h2></div>
            <div class="card-body">
            <p class="card-text">
                <div id="candidati">
                    <div class="card"  style="width: 100%; height: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <form method="post" action="{{route('jobs.inviacandidatura')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">
                            <input type="hidden" name="job" id="job" value="{{$job->titolo}}">
                            <div class="card-body">
                                <div class="d-inline-block"><h5 class="card-title">Scrivici</h5></div>
                                </td>

                                {{--<div class="d-inline-block" style="float: right">
                                    <button style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-primary">Invia</button>
                                </div>--}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="text-danger">Nome: </span>
                                    <input required type="text" class="form-control" name="nome" id="nome">
                                </li>
                                <li class="list-group-item"><span class="text-danger">e-mail: </span>
                                    <input required type="email" class="form-control" name="mailfrom" id="mailfrom">
                                </li>
                                <li class="list-group-item"><span class="text-danger">Allega CV: (pdf o word)</span>
                                    <input type="file" name="cv" id="cv" class="form-control" value="" accept=".pdf, .doc, .docx">
                                </li>
                                <li class="list-group-item"><span class="text-danger">Messaggio: </span>
                                    <textarea required name="messaggio" id="content" rows="3" class="form-control"></textarea>
                                </li>
                                <li class="list-group-item">
                                <span style="float: left; font-size: .8rem; color: black;">
                                    <input style="margin-right: 5px" type="checkbox" id="consenso" name="consenso" required>
                                        Ho letto l'Informativa sulla Privacy e acconsento al trattamento dei dati personali
                                </span>
                                    <input type="submit" value="Invia" id="inviacv" class="btn btn-primary not-active" style="  float: right; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </p>
            </div>
        </div>

        <div id="invioincorso" class="alert alert-danger" style="display: none">
            <p>
                Invio in Corso...
            </p>
        </div>

    </div>

    <div style="margin: 120px 0">&nbsp;</div>

@endsection

@section('footer')
    @parent
    <script>
        var windowWidth = $(window).width();
        if (windowWidth < 600)
        {
            $('#cont').css('margin-top',160);
        }

        $("#consenso").change(function() {
            if(this.checked) {
                $("#inviacv").removeClass('not-active');
            }else{
                $("#inviacv").addClass('not-active');
            }
        });

        $('div.alert').fadeOut(6000);

        $('#inviacv').click(function() {
            $("#inviacv").addClass('not-active');
            $("#invioincorso").fadeIn(4000);

        });
    </script>



@stop
