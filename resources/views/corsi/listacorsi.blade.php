@extends('template.layout')

@section('content')

    <div class="container" style="margin-top: 50px">
        <table class="table table-responsive-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Lunedì</th>
                <th scope="col">Martedì</th>
                <th scope="col">Mercoledì</th>
                <th scope="col">Giovedì</th>
                <th scope="col">Venerdì</th>
                <th scope="col">Sabato</th>
            </tr>
            </thead>
            <tbody>
            {{--                @foreach($corsi as $corso)
                                <div class="col-md-4 col-sm-6 col-lg-2">
                                    <button type="button" class="btn btn-primary">{{$corso->nome_corso}} </button>
                                </div>
                            @endforeach--}}

            @for($i=1;$i<19;$i++)
                <tr>
                    <?php $riga = 9+$i.":00";?>
                    <th scope="row"><?=$riga?></th>
                    <td>
                        @if($ris[0])
                            @foreach($ris[0] as $ele)
                                @if($ele->ora==$i)
                                    <button type="button" class="btn btn-primary">{{$ele->corsoId->nome_corso}} </button>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[1])
                            @foreach($ris[1] as $ele)
                                @if($ele->ora==$i)
                                    <button type="button" class="btn btn-primary">{{$ele->corsoId->nome_corso}} </button>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[2])
                            @foreach($ris[2] as $ele)
                                @if($ele->ora==$i)
                                    <button type="button" class="btn btn-primary">{{$ele->corsoId->nome_corso}} </button>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[3])
                            @foreach($ris[3] as $ele)
                                @if($ele->ora==$i)
                                    <button type="button" class="btn btn-primary">{{$ele->corsoId->nome_corso}} </button>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[4])
                            @foreach($ris[4] as $ele)
                                @if($ele->ora==$i)
                                    <button type="button" class="btn btn-primary">{{$ele->corsoId->nome_corso}} </button>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[5])
                            @foreach($ris[5] as $ele)
                                @if($ele->ora==$i)
                                    <button type="button" class="btn btn-primary">{{$ele->corsoId->nome_corso}} </button>
                                @endif
                            @endforeach
                        @endif
                    </td>

                </tr>
            @endfor

            </tbody>
        </table>
    </div>
@endsection
