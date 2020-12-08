<?php

namespace App\Http\Controllers;

use App\Models\Corso;
use App\Models\Staff;
use Gate;
use Illuminate\Http\Request;
use function view;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::orderBy('nome')->get();
        //dd($staff);
        return view('staff.listastaff')->with('staff',$staff);

    }

    public function infostaff(Staff $staff)
    {
        return view('staff.infostaff')->with('staff',$staff);
    }

    public function gestisci()
    {
        if(Gate::denies('manage-admin')){
            dd('Non autorizzato');
        }

        $staff = Staff::orderBy('nome')->get();
        return view('staff.modificastaff')->with('staff',$staff);

    }

    public function aggiungi()
    {
        return view('staff.aggiungistaff');
    }

    public function elimina(Staff $staff)
    {
        $id = $staff->id;
        $corsi = Corso::where('staff_id', $id)->get();
        foreach ($corsi as $corso){
            $corso->staff_id = 0;
            $corso->save();
        }

        $staff->delete();
    }

    public function salva(Request $req)
    {
        $staff = new Staff();
        $staff->nome = $req->nome;
        $staff->descrizione = $req->testo;
        $staff->foto = "";

        $staff->save();

        if($req->hasFile('foto')){
            $file = $req->file('foto');
            if(!$file->isValid()){
                return false;
            }

            $fileName = $staff->id.'.'.$file->extension();
            $file->storeAs('staff', $fileName);
            $staff->foto = "staff/".$fileName;

            $staff->save();
        }
        return redirect()->route('staff.modifica');

    }
}
