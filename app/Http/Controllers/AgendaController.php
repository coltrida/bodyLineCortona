<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Corso;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function estrai()
    {
        $lun = Agenda::where('giorno', 1)->get();
        $mar = Agenda::where('giorno', 2)->get();
        $mer = Agenda::where('giorno', 3)->get();
        $gio = Agenda::where('giorno', 4)->get();
        $ven = Agenda::where('giorno', 5)->get();
        $sab = Agenda::where('giorno', 6)->get();

        $ris = [$lun, $mar, $mer, $gio, $ven, $sab];

        $orario = [
            "09:00",
            "09:30",
            "10:00",
            "10:30",
            "11:00",
            "11:30",
            "12:00",
            "12:30",
            "13:00",
            "13:30",
            "14:00",
            "14:30",
            "15:00",
            "15:30",
            "16:00",
            "16:30",
            "17:00",
            "17:30",
            "18:00",
            "18:30",
            "19:00",
            "19:30",
            "20:00",
            "20:30",
            "21:00"
        ];

        //$nomecorso = $this->getNomeCorso($agenda[0]);
        //dd($ris[1]);
        return view('corsi.listacorsi',
            [
                'ris' => $ris,
                'orario' => $orario

            ]);
    }

    public function getNomeCorso(Agenda $agenda)
    {
        return Corso::where('id', $agenda->id)->get();
    }
}
