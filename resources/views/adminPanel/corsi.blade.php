@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Corsi</h1>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <!-- Page insert -->
                            <form  class="row" action="{{route('admin.course.add')}}" method="post">
                                @csrf
                                <div class="col-auto">
                                    <input id="nome" type="text" name="nome" class="form-control"  placeholder="Nome Corso">
                                </div>
                                <div class="col-5">
                                    <input id="descrizione" type="text" class="form-control" name="descrizione" placeholder="Descrizione">
                                </div>
                                <div class="col-auto">
                                    <select id="trainer" class="form-control"  name="trainer_id">
                                        <option value="{{null}}">Seleziona trainer</option>
                                        @foreach($trainers as $trainer)
                                            <option value="{{$trainer->id}}">{{$trainer->nome}} {{$trainer->cognome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Inserisci</button>
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
                                            <th>Nome Corso</th>
                                            <th>Descrizione</th>
                                            <th>Istruttore</th>
                                            <th style="text-align: center">azioni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $item)
                                            <tr>
                                                <td>{{$item->uppername}}</td>
                                                <td>{{$item->descrizione}}</td>
                                                <td>
                                                    @if(isset($item->trainer->nome))
                                                        {{$item->trainer->nome}} {{$item->trainer->cognome}}
                                                    @endif
                                                </td>
                                                <td style="text-align: center">
                                                    <a href="{{route('admin.course.delete', $item->id)}}">
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
