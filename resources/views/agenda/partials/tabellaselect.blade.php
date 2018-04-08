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
        <tr>
            <th scope="row" style="vertical-align: middle">{{$orario[$i-1]}}</th>
            @for($j=0;$j<6;$j++)
                <td>
                    @if($ris[$j])
                        @foreach($ris[$j] as $ele)
                            @if($ele->ora==$i)

                                    <div type="button"
                                            class="btn btn-primary"
                                            style="width:138px; height:90px;
                                            margin-bottom:5px;
                                            white-space: normal;
                                            padding-right: 2px;

                                            padding-left: 0;
                                            background-color:{{$ele->corsoId->colore}};
                                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <p class="d-inline-block" >
                                            <a style="display: none" title="Delete" href="{{route('agenda.elimina',$ele->id)}}"   class="btn btn-danger">
                                                <span style="width: 2px; margin-right: 7px" class="fa fa-trash"></span>
                                            </a>
                                        </p>
                                        {{$ele->corsoId->nome_corso}}
                                    </div>
                                <br>
                            @endif
                        @endforeach


                    @endif
                        <?php $z=$j+1; $indice = "$i-$z" ?>

                            <div class="btn-dark" style="
                                height: 90px;
                                display: none;
                                width: 138px;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                background-color: lightslategray">
                                <p class="text-center" style="padding: 20px 0 0 20px">
                                    <input class="form-check-input"
                                           name="orario[]"
                                           style="display: none;"
                                           type="checkbox" value="<?=$indice?>"
                                           id="<?=$indice?>" >
                                </p>
                            </div>


                </td>
            @endfor

        </tr>
    @endfor

    </tbody>
</table>