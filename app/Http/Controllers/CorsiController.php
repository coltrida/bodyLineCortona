<?php

namespace App\Http\Controllers;

use App\Models\Corso;
use App\Models\Staff;
use Illuminate\Http\Request;

class CorsiController extends Controller
{
    public function lista()
    {
        $corsi = Corso::orderBy('nome_corso')->get();
        return view('corsi.eliminacorso')->with('corsi',$corsi);
    }


    public function storia()
    {
        return view('storia');
    }

    public function info(Corso $corso)
    {
        return view('corsi.infocorso')->with('corso',$corso);
    }

    public function inserisci()
    {
        $staff = Staff::orderBy('nome')->get();
        return view('corsi.inseriscicorso')->with('staff',$staff);
    }

    public function salva(Request $req)
    {
        $corso = new Corso();
        $corso->nome_corso = $req->nomecorso;
        $corso->descrizione = $req->testo;
        $corso->livello = $req->livello;
        $corso->colore = $req->colore;
        $corso->foto = "";
        $corso->staff_id = $req->trainer;

        $corso->save();

        if($req->hasFile('foto')){
            $file = $req->file('foto');
            if(!$file->isValid()){
                return false;
            }

            $fileName = $corso->id.'.'.$file->extension();
            $file->storeAs('corsi', $fileName);
            $corso->foto = "corsi/".$fileName;

            $corso->save();
        }
        return redirect()->route('agenda.modifica');

    }
}
