@extends('template.layout')
@section('content')

    <div class="container" style="margin-top: 80px">

        <div class="card bg-dark text-white" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Inserisci Staff</h3>
            </div>
            <form action="{{route('staff.salva')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <ul id="lista" class="list-group list-group-flush">

                    <li  class="list-group-item bg-dark text-white">
                        <div  class="row">
                            <div class="col-sm-4">
                                <label>Nome</label><br>
                                <input type="text" name="nome" class="form-control" value="">
                            </div>

                        </div>
                    </li>

                    <li  class="list-group-item bg-dark text-white">
                        <div  class="row">
                            <div class="col-sm">
                                <label>Descrizione</label><br>
                                <textarea name="testo" class="form-control"></textarea>
                            </div>

                        </div>
                    </li>

                    <li  class="list-group-item bg-dark text-white">
                        <div  class="row">
                            <div class="col-sm">
                                <label>Foto</label><br>
                                <input type="file"  name="foto" id="foto" class="form-control" value="">
                            </div>

                        </div>
                    </li>

                </ul>

                <div class="card-body">
                    <button class="btn btn-primary">Inserisci</button>
                </div>
            </form>
        </div>
    </div>

@endsection