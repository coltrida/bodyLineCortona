<?php


namespace App\Services;


use App\Models\Course;

class CourseService
{
    public function index()
    {
        return Course::orderBy('nome')->get();
    }

    public function listaCorsiConTrainer()
    {
        return Course::with('trainer')->orderBy('nome')->get();
    }

    public function listaCorsiConCalendario()
    {
        return Course::with('calendars')->whereHas('calendars')->orderBy('nome')->get();
    }

    public function elimina($id)
    {
        return Course::destroy($id);
    }

    public function aggiungi($request)
    {
        return Course::create($request->all());
    }
}
