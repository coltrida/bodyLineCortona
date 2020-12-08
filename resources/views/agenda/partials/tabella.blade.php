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

    @for($i=1;$i<28;$i++)
        @php
            $riga_visualizza = 0;
        @endphp

        @for($j=0;$j<6;$j++)

                @if($ris[$j])
                    @foreach($ris[$j] as $ele)
                        @if($ele->ora==$i)
                            @php
                                $riga_visualizza = 1;
                            @endphp
                        @endif
                    @endforeach

                @endif


        @endfor


        @if($riga_visualizza == 1)
        <tr>
            <th scope="row" style="vertical-align: middle"><span style="font-size: 20px;">{{$orario[$i-1]}}</span></th>
            @for($j=0;$j<6;$j++)
                <td style="padding: 3px 0 0 10px; border-right: solid lightgray 1px">
                    @if($ris[$j])
                        @foreach($ris[$j] as $ele)
                            @if($ele->ora==$i)
                                <a href="{{route('corso.info', $ele->corso_id)}}">
                                    <button type="button"
                                            class="btn btn-primary selezionati"
                                            style="width:138px; height:40px;
                                            margin-bottom:5px;
                                                    line-height: 11px;
                                                    white-space: normal;
                                            padding-right: 2px;
                                            padding-left: 0;
                                                    padding-bottom: 12px;
                                            background-color:{{$ele->corsoId->colore}};
                                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <span style=" font-size: 10px; line-height: 11px; text-transform: uppercase;">{{$ele->corsoId->nome_corso}}</span>
                                    </button>
                                </a>
                                <br>
                            @endif
                        @endforeach

                    @endif

                </td>
            @endfor

        </tr>
        @endif
    @endfor

    </tbody>
</table>