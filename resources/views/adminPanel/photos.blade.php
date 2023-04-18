@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Inserisci Foto - {{$nomeSezione}}</h1>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <!-- Page insert -->
                            <form  action="{{route('admin.photo.add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-auto">
                                        <select class="form-control"  name="posizione">
                                            <option>Seleziona posizione</option>
                                            @foreach($slotDisponibili as $ele)
                                                <option value="{{$ele}}">{{$ele}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Sostituisci</button>
                                    </div>
                                </div>

                            </form >
                        </div>
                    </div>

                    <!-- table -->
                    <h2 class="h3 mb-2 text-gray-800">Foto - {{$nomeSezione}}</h2>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Nome foto</th>
                                            <th>foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($photos as $item)
                                            <tr>
                                                <td style="vertical-align: middle">{{$item}}</td>
                                                <td><img width="300" src="{{asset('storage/'.$item)}}" alt=""></td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

@endsection
