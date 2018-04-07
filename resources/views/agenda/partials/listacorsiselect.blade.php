<div class="row">
    @foreach($corsi as $corso)
        <a class="nav-link listacorsi" id="{{route('corso.seleziona', $corso->id)}}" >
            <input class="form-check-input" style="display: none;" type="radio" name="corso_selezionato" id="{{$corso->id}}" value="{{$corso->id}}">
            <label class="form-check-lavel" for="{{$corso->id}}">
                <div style="
                        height: 70px;
                        width: 138px;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        background-color: {{$corso->colore}}">
                    <p class="text-center text-white"> {{$corso->nome_corso}}</p>
                </div>
            </label>

        </a>
    @endforeach
</div>

{{--
<div class="form-check form-check-inline">

    <input class="form-check-input" type="radio" name="colore" id="inlineRadio4" value="">
    <label class="form-check-label" for="inlineRadio4">
        <div style="height: 20px; width: 20px; background-color:">
            <p class="text-center text-white"></p>
        </div>
    </label>
</div>--}}
