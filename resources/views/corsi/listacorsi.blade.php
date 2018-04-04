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

            @for($i=1;$i<26;$i++)
                <tr>
                    <th scope="row">{{$orario[$i-1]}}</th>
                    <td>
                        @if($ris[0])
                            @foreach($ris[0] as $ele)
                                @if($ele->ora==$i)
                                    <a href="{{route('corso.info', $ele->corso_id)}}">
                                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">{{$ele->corsoId->nome_corso}} </button>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[1])
                            @foreach($ris[1] as $ele)
                                @if($ele->ora==$i)
                                    <a href="{{route('corso.info', $ele->corso_id)}}">
                                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">{{$ele->corsoId->nome_corso}} </button>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[2])
                            @foreach($ris[2] as $ele)
                                @if($ele->ora==$i)
                                    <a href="{{route('corso.info', $ele->corso_id)}}">
                                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">{{$ele->corsoId->nome_corso}} </button>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[3])
                            @foreach($ris[3] as $ele)
                                @if($ele->ora==$i)
                                    <a href="{{route('corso.info', $ele->corso_id)}}">
                                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">{{$ele->corsoId->nome_corso}} </button>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[4])
                            @foreach($ris[4] as $ele)
                                @if($ele->ora==$i)
                                    <a href="{{route('corso.info', $ele->corso_id)}}">
                                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">{{$ele->corsoId->nome_corso}} </button>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if($ris[5])
                            @foreach($ris[5] as $ele)
                                @if($ele->ora==$i)
                                    <a href="{{route('corso.info', $ele->corso_id)}}">
                                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">{{$ele->corsoId->nome_corso}} </button>
                                    </a>
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
