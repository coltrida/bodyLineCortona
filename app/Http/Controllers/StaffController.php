<?php

namespace App\Http\Controllers;

use App\Models\Staff;
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
        $staff = Staff::orderBy('nome')->get();
        return view('staff.modificastaff')->with('staff',$staff);

    }

    public function aggiungi()
    {
        return view('staff.aggiungistaff');
    }

    public function elimina(Staff $staff)
    {
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
