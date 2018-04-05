<table class="table table-responsive-sm">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col" style="padding-left: 35px">Lunedì</th>
        <th scope="col" style="padding-left: 35px">Martedì</th>
        <th scope="col" style="padding-left: 35px">Mercoledì</th>
        <th scope="col" style="padding-left: 35px">Giovedì</th>
        <th scope="col" style="padding-left: 35px">Venerdì</th>
        <th scope="col" style="padding-left: 35px">Sabato</th>
    </tr>
    </thead>
    <tbody>

    @for($i=1;$i<26;$i++)
        <tr>
            <th scope="row">{{$orario[$i-1]}}</th>
            @for($j=0;$j<6;$j++)
                <td>
                    @if($ris[$j])
                        @foreach($ris[$j] as $ele)
                            @if($ele->ora==$i)
                                <a href="{{route('corso.info', $ele->corso_id)}}">
                                    <button type="button"
                                            class="btn btn-primary"
                                            style="width:138px; height:70px;
                                            margin-bottom:5px;
                                            white-space: normal;
                                            padding-right: 2px;
                                            padding-left: 0;
                                            background-color:{{$ele->corsoId->colore}};
                                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        {{$ele->corsoId->nome_corso}}
                                    </button>
                                </a>
                                <br>
                            @endif
                        @endforeach
                    @endif
                </td>
            @endfor

        </tr>
    @endfor

    </tbody>
</table>