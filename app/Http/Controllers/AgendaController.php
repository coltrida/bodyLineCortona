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

        //$nomecorso = $this->getNomeCorso($agenda[0]);
        //dd($ris[1]);
        return view('corsi.listacorsi',
            [
                'ris' => $ris,

            ]);
    }

    public function getNomeCorso(Agenda $agenda)
    {
        return Corso::where('id', $agenda->id)->get();
    }
}
