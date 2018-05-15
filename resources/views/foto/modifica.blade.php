@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 80px">

        <div class="card bg-dark text-white" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Modifica Foto</h3>
            </div>
            @for($i = 1; $i < 7; $i++)
            <form action="{{route('foto.salva',$i)}}" method="POST" enctype="multipart/form-data">

                {{csrf_field()}}
                <ul id="lista" class="list-group list-group-flush">

                        <li  class="list-group-item bg-dark text-white">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <label>Foto nr. {{$i}}</label>
                                    <?php $fotovis = "storage/principal/$i.jpeg"; ?>
                                    <img src="{{asset($fotovis)}}" width="400px">
                                </div>
                                <div class="col-sm-4">
                                    <label>Foto</label><br>
                                    <input type="file"  name="foto" id="foto" class="form-control" value="">
                                </div>

                                <div class="col-sm-2">
                                    <br>
                                    <button class="btn btn-primary">Inserisci</button>
                                </div>
                            </div>
                        </li>


                </ul>

            </form>
            @endfor
        </div>
    </div>
@stop