<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <label>Descrizione</label><br>
        <textarea required name="testo" id="testo" class="form-control"></textarea>
    </li>

    <li class="list-group-item"><span class="text-danger">
                            <div class="form-group">
                                <label >Intensità:</label>
                                <select required name="livello" id="livello" style="width: 160px" class="form-control">
                                  <option selected>--seleziona--</option>
                                  <option id="alta" value="Alta">Alta</option>
                                  <option id="media" value="Media">Media</option>
                                  <option id="bassa" value="Bassa">Bassa</option>
                                </select>
                              </div>
                        </span>  </li>

    <li class="list-group-item"><span class="text-danger">
                            <div class="form-group">
                                <label >Trainer:</label>
                                <select name="trainer" style="width: 160px" class="form-control">
                                  <option selected value="0">--seleziona--</option>
                                    @foreach($staff as $ele)
                                        <option id="{{$ele->id}}" value="{{$ele->id}}">{{$ele->nome}}</option>
                                    @endforeach
                                </select>
                              </div>
                        </span>  </li>

    <li class="list-group-item">
        <label>Colore</label><br>
        <div class="form-check form-check-inline">
            <?php $colore1 = '#009900' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio1" value="<?php echo $colore1 ?>">
            <label class="form-check-label" for="inlineRadio1">
                <div style="height: 20px; width: 20px; background-color:<?php echo $colore1 ?>">
                    <p class="text-center text-white"></p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore2 = '#FF0000' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio2" value="<?php echo $colore2 ?>">
            <label class="form-check-label" for="inlineRadio2">
                <div style="height: 20px; width: 20px; background-color:<?php echo $colore2 ?>">
                    <p class="text-center text-white"></p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore3 = '#FFCC33' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio3" value="<?php echo $colore3 ?>">
            <label class="form-check-label" for="inlineRadio3">
                <div style="height: 20px; width: 20px; background-color:<?php echo $colore3 ?>">
                    <p class="text-center text-white"></p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore4 = '#000099' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio4" value="<?php echo $colore4 ?>">
            <label class="form-check-label" for="inlineRadio4">
                <div style="height: 20px; width: 20px; background-color:<?php echo $colore4 ?>">
                    <p class="text-center text-white"></p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore5 = '#800000' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio5" value="<?php echo $colore5 ?>">
            <label class="form-check-label" for="inlineRadio5">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore5 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore6 = '#006666' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio6" value="<?php echo $colore6 ?>">
            <label class="form-check-label" for="inlineRadio6">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore6 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore7 = '#4E387E' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio7" value="<?php echo $colore7 ?>">
            <label class="form-check-label" for="inlineRadio7">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore7 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore8 = '#c71585' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio8" value="<?php echo $colore8 ?>">
            <label class="form-check-label" for="inlineRadio8">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore8 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore9 = '#3E3535' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio9" value="<?php echo $colore9 ?>">
            <label class="form-check-label" for="inlineRadio9">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore9 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore10 = '#25587E' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio10" value="<?php echo $colore10 ?>">
            <label class="form-check-label" for="inlineRadio10">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore10 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore11 = '#254117' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio11" value="<?php echo $colore11 ?>">
            <label class="form-check-label" for="inlineRadio11">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore11 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <?php $colore12 = '#EE9A4D' ?>
            <input class="form-check-input" type="radio" name="colore" id="inlineRadio12" value="<?php echo $colore12 ?>">
            <label class="form-check-label" for="inlineRadio12">
                <div style="height: 20px; width: 50px; background-color:<?php echo $colore12 ?>">
                    <p class="text-center text-white">usato</p>
                </div>
            </label>
        </div>


    </li>

    {{--<li class="list-group-item">
        <label>Foto</label><br>
        <input type="file"  name="foto" id="foto" class="form-control">
    </li>--}}



    @if($pagina == 'modifica')
        <li class="list-group-item">
            <button class="btn btn-primary">Modifica</button>
        </li>
    @else
        <li class="list-group-item">
            <label>Foto</label><br>
            <input type="file"  name="foto" id="foto" class="form-control" value="">
        </li>

        <li class="list-group-item">
            <button class="btn btn-primary">Inserisci</button>
        </li>
    @endif

</ul>