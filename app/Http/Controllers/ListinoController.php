<?php

namespace App\Http\Controllers;

use App\Models\Listino;
use Illuminate\Http\Request;

class ListinoController extends Controller
{
    public function index()
    {
        $listino = Listino::orderBy('id')->get();
        return view('listino.infolistino')->with('listino',$listino);
    }

    public function modificalistino()
    {
        $listino = Listino::orderBy('id')->get();
        return view('listino.modificalistino')->with('listino',$listino);
    }

    public function salvalistino(Request $req)
    {
       //dd(count($req->nomelistino));
        $righe = count($req->nomelistino);
        Listino::truncate();

        //$listino = Listino::orderBy('id')->get();
        for ($i=0;$i<$righe;$i++){
            //dd($req->nomelistino[$i]);
            $ele = new Listino();
            $ele->nome = $req->nomelistino[$i];
            $ele->descrizione = $req->deslistino[$i];
            $ele->prezzo = $req->prezzolistino[$i];
            $risultato = $ele->save();
        }

        return redirect()->route('listino.info');
    }

    public function delete(Listino $listino)
    {
        $listino->delete();
    }
}
