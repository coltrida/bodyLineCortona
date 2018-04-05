@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 50px">
        <div class="card" style="width: 100%;">
            <form action="{{route('corso.salva')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="d-inline-block"><h5 class="card-title">
                            <label>Nome Corso</label><br>
                            <input type="text" required name="nomecorso" class="form-control" value="">
                        </h5></div>
                    <div class="d-inline-block" style="float: right"><button class="btn btn-primary" onclick="goBack()">Go Back</button></div>
                    {{--<p class="card-text"></p>--}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <label>Descrizione</label><br>
                        <textarea required name="testo" class="form-control"></textarea>
                    </li>

                    <li class="list-group-item"><span class="text-danger">
                            <div class="form-group">
                                <label >Intensità:</label>
                                <select required name="livello" style="width: 160px" class="form-control">
                                  <option selected>--seleziona--</option>
                                  <option value="Alta">Alta</option>
                                  <option value="Media">Media</option>
                                  <option value="Bassa">Bassa</option>
                                </select>
                              </div>
                        </span>  </li>

                    <li class="list-group-item"><span class="text-danger">
                            <div class="form-group">
                                <label >Trainer:</label>
                                <select name="trainer" style="width: 160px" class="form-control">
                                  <option selected value="0">--seleziona--</option>
                                    @foreach($staff as $ele)
                                        <option value="{{$ele->id}}">{{$ele->nome}}</option>
                                    @endforeach
                                </select>
                              </div>
                        </span>  </li>

                    <li class="list-group-item">
                        <label>Colore</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio1" value="#009900">
                            <label class="form-check-label" for="inlineRadio1">verde</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="#FF0000">
                            <label class="form-check-label" for="inlineRadio2">rosso</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="#FFCC33">
                            <label class="form-check-label" for="inlineRadio2">giallo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="#000099">
                            <label class="form-check-label" for="inlineRadio2">blu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="#330033">
                            <label class="form-check-label" for="inlineRadio2">marrone</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="#006666">
                            <label class="form-check-label" for="inlineRadio2">cobalto</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="#4E387E">
                            <label class="form-check-label" for="inlineRadio2">Medium Purple4</label>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <label>Foto</label><br>
                        <input type="file"  name="foto" id="foto" class="form-control" value="">
                    </li>

                    <li class="list-group-item">
                        <button class="btn btn-primary">Inserisci</button>
                    </li>

                </ul>
            </form>
        </div>
    </div>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>