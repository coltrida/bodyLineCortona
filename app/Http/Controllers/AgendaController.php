<?php

namespace App\Http\Controllers;

use function abort;
use App;
use App\Models\Agenda;
use App\Models\Corso;
use Gate;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function estrai()
    {

        return view('agenda.visualizzaagenda',
            [
                'ris' => $this->estraidati()[0],
                'orario' => $this->estraidati()[1]

            ]);
    }

    public function getNomeCorso(Agenda $agenda)
    {
        return Corso::where('id', $agenda->id)->get();
    }

    public function gestisci()
    {
        if(Gate::denies('manage-admin')){
            dd('Non autorizzato');
        }

        $corsi = Corso::orderBy('nome_corso')->get();
        return view('agenda.modificaagenda',
            [
                'ris' => $this->estraidati()[0],
                'orario' => $this->estraidati()[1],
                'corsi' => $corsi
            ]);
    }

    public function estraidati()
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
            "21:00",
            "21:30",
            "22:00"
        ];

        return [$ris, $orario];

    }

    public function inserisci(Request $req)
    {
        foreach ($req->orario as $ele){
            $agenda = new Agenda();
            $agenda->corso_id = $req->corso_selezionato;
            $oragiorno=explode("-",$ele);
            $agenda->ora = $oragiorno[0];
            $agenda->giorno = $oragiorno[1];
            $agenda->save();
        }
        return redirect()->route('agenda.modifica');
    }

    public function elimina(Agenda $agenda)
    {
        $agenda->delete();

    }

    public function resetta()
    {
        Agenda::truncate();
        return redirect()->route('agenda.modifica');
    }

    public function stampa(){

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('storia2');
        return $pdf->download('storia.pdf');

    }
}
