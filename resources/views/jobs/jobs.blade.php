@extends('template.layout')
@section('content')
    <div id="cont" class="container" style="margin-top: 80px; margin-bottom: 50px">

        @if(session()->has('message'))
            <div class="alert alert-info" role="alert">
                {{session()->get('message')}}
            </div>
        @endif

        <div class="card text-white bg-secondary mb-3" style="margin-top: 40px">
            <div class="card-header"><h2>Posizioni Lavorative Aperte</h2></div>
            <div class="card-body">
                @if(count($jobs))

                        <p class="card-text">
                            <div class="table-responsive">
                            <table id="tabella" class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Titolo</th>
                                        <th scope="col">Testo</th>
                                        <th scope="col">Data</th>
                                        <th id="leggi" scope="col">Leggi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>
                                                {{$job->titolo}}
                                            </td>
                                            <td>
                                                {{ str_limit($job->testo, 80, $end = '...') }}

                                            </td>
                                            <td>
                                                {{$job->created_at->format('d/m/Y')}}
                                            </td>
                                            <td>
                                                <a title="View" href="{{route('jobs.visualizza', $job->id)}}" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </p>

                @else
                    <p class="card-text" style="height: 80px">
                        Non ci sono posizioni lavorative aperte
                    </p>
                @endif
            </div>
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
    </script>

    <script>
        $('document').ready(function () {
            $('div.alert').fadeOut(6000);

            $('.btn-default').on('click', function (ele) {
                ele.preventDefault();
                $('#tabella tbody').html('');
                var urljob = ($(this).attr('href'));
                $.ajax(urljob,
                    {
                        method: 'GET',
                        complete : function (resp) {
                            console.log(resp.responseJSON.job);
                                $('#leggi').text('Candidati');
                                var id = resp.responseJSON.job.id;
                                var titolo = resp.responseJSON.job.titolo;
                                var testo = resp.responseJSON.job.testo;
                                var data1 = new Date(resp.responseJSON.job.created_at);
                                var Month = ((data1.getMonth().length+1) === 1)? (data1.getMonth()+1) : '0' + (data1.getMonth()+1);
                                var data = data1.getDate()+'-'+Month+'-'+data1.getFullYear();

                                var prelinkcandidati = '{{ route('jobs.candidati', ":id") }}';
                                var linkcandidati = prelinkcandidati.replace(':id', id);

                                $('#tabella tbody').append('<tr><td>'+titolo+'</td><td>'+testo+'</td><td>'+data+'</td><td><a id="'+id+'" title="Candidati" href="'+linkcandidati+'" class="btn btn-success candidati"><i class="fas fa-mouse-pointer"></i></a></td></tr>');

                        }
                    })
            })
        });
    </script>

@stop
