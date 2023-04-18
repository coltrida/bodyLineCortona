@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Trainers</h1>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <!-- Page insert -->
                            <form  action="{{route('admin.trainer.add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-auto">
                                        <input id="nome" type="text" name="nome" class="form-control"  placeholder="Nome Trainer">
                                    </div>
                                    <div class="col-auto">
                                        <input id="cognome" type="text" name="cognome" class="form-control"  placeholder="Cognome Trainer">
                                    </div>

                                    <div class="col-6">
                                        <textarea class="form-control" name="descrizione" rows="2" placeholder="descrizione"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-auto">
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Inserisci</button>
                                    </div>
                                </div>

                            </form >
                        </div>
                    </div>

                    <!-- table -->
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Cognome</th>
                                            <th>Descrizione</th>
                                            <th>foto</th>
                                            <th style="text-align: center">azioni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trainers as $item)
                                            <tr>
                                                <td style="vertical-align: middle">{{$item->nome}}</td>
                                                <td style="vertical-align: middle">{{$item->cognome}}</td>
                                                <td style="vertical-align: middle">{{$item->descrizione}}</td>
                                                <td>
                                                    @if(isset($item->foto))
                                                        <img width="100" src="{{asset($item->path)}}" alt="">
                                                    @endif
                                                </td>
                                                <td style="text-align: center; vertical-align: middle">
                                                    <a href="{{route('admin.trainer.delete', $item->id)}}">
                                                        <i title="elimina" class="fas fa-trash" style="color: red"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

@endsection
