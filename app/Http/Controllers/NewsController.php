<?php

namespace App\Http\Controllers;

use App\Models\News;
use Gate;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function inserisci()
    {
        if(Gate::denies('manage-admin')){
            dd('Non autorizzato');
        }

        return view('news.inseriscinews');
    }

    public function salva(Request $req)
    {
        News::truncate();
        $news = new News();
        if ($req->testo != ''){
            $news->descrizione = $req->testo;
        }else {
            $news->descrizione = '';
        }
        $news->foto = '';

        if($req->hasFile('foto')){
            $news->foto = 'images/notizia2.jpeg';
            $file = $req->file('foto');
            if(!$file->isValid()){
                return false;
            }
            $fileName = 'notizia2.'.$file->extension();
            $file->storeAs('images', $fileName);
        }
        $news->save();
        return redirect()->route('home')->with('news',$news[0]);

    }

    public function home()
    {
        $news = News::get();
        //dd($news[0]);
        $x = rand(1,20);
        $y = rand(1,20);
        $versione = "?ver=$x.$y";
        return view('home')->with('news',$news[0])->with('versione',$versione);
    }

}
