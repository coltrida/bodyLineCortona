<div class="row">
    @foreach($corsi as $corso)
        <a class="nav-link" href="{{route('corso.info', $corso->id)}}">
            <button type="button" class="btn btn-dark"
                    style="width:138px;
                            height:70px;
                            padding-left: 0;
                            margin-right: 10px;
                            padding-right: 2px;
                            white-space: normal;
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            background-color: {{$corso->colore}}">
                {{$corso->nome_corso}}
            </button>
        </a>
    @endforeach
</div>