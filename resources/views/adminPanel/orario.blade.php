@extends('adminPanel.index')

@section('contenuto')
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Orario Palestra</h1>

        <!-- table -->
        <div class="card shadow mb-4" style="width: 100%">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Giorno</th>
                                <th>Inizio Mattina</th>
                                <th>Fine Mattina</th>
                                <th>Inizio Pomeriggio</th>
                                <th>Fine Pomeriggio</th>
                                <th style="text-align: center">azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orario as $item)
                                <form action="{{route('admin.hour.edit')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                <tr>
                                    <td>{{$item->giornosettimana}}</td>
                                    <td>
                                        <input type="text" name="oraMattinoInizio" class="form-control" value="{{$item->oraMattinoInizio}}">
                                    </td>
                                    <td>
                                        <input type="text" name="oraMattinoFine" class="form-control" value="{{$item->oraMattinoFine}}">
                                    </td>
                                    <td>
                                        <input type="text" name="oraPomeriggioInizio" class="form-control" value="{{$item->oraPomeriggioInizio}}">
                                    </td>
                                    <td>
                                        <input type="text" name="oraPomeriggioFine" class="form-control" value="{{$item->oraPomeriggioFine}}">
                                    </td>
                                    <td style="text-align: center">
                                        <button type="submit">
                                            <i title="modifica" class="fas fa-pencil-alt" style="color: blue"></i>
                                        </button>
                                    </td>
                                </tr>
                                </form>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

@endsection
