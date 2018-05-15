<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class FotoController extends Controller
{
    public function index() {
        return view('foto.modifica');
    }

    public function salva($indice, Request $req) {
        if($req->hasFile('foto')){
            $file = $req->file('foto');
            if(!$file->isValid()){
                return false;
            }

            $fileName = $indice.'.'.$file->extension();
            $file->storeAs('principal', $fileName);

        }
        return redirect()->route('index');
    }
}
