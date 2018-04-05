@extends('template.layout')
@section('content')

    <div class="container" style="margin-top: 80px">

        @include('agenda.partials.listacorsi')

        <hr  class="featurette-divider" style="margin: 10px 0;">

        <div class="row" style="width:100%;margin-bottom: 30px">
            <a class="nav-link" href="{{route('corso.inserisci')}}">
                <button type="button" class="btn btn-dark" style="width: 145px;height:60px; ">Inserisci Corso</button>
            </a>
            <a class="nav-link" href="{{route('corso.lista')}}">
                <button type="button" class="btn btn-dark" style="width: 145px;height:60px;">Elimina Corso</button>
            </a>
            <a class="nav-link" href="">
                <button type="button" class="btn btn-dark" style="width: 145px;height:60px; ">Modifica Corso</button>
            </a>
            <a class="nav-link" href="">
                <button type="button" class="btn btn-primary" style="width: 145px;height:60px; ">Aggiungi orario</button>
            </a>
            <a class="nav-link" href="">
                <button type="button" class="btn btn-primary" style="width: 145px;height:60px; ">Elimina orario</button>
            </a>
            <a class="nav-link" href="">
                <button type="button" class="btn btn-danger" style="width: 145px;height:60px;">Resetta Agenda</button>
            </a>
        </div>

    @include('agenda.partials.tabella')
    </div>
@endsection
