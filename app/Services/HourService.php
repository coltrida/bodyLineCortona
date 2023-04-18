<?php


namespace App\Services;

use App\Models\Hour;

class HourService
{
    public function index()
    {
        return Hour::orderBy('giorno')->get();
    }

    public function edit($request)
    {
        Hour::find($request->id)->update([
            'oraMattinoInizio' => $request->oraMattinoInizio,
            'oraMattinoFine' => $request->oraMattinoFine,
            'oraPomeriggioInizio' => $request->oraPomeriggioInizio,
            'oraPomeriggioFine' => $request->oraPomeriggioFine,
        ]);
    }

}
