<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function inserisci()
    {
        return view('news.inseriscinews');
    }

    public function salva(Request $req)
    {
        News::truncate();
        $news = new News();
        $news->descrizione = $req->testo;
        $news->foto = 'images/notizia.jpeg';
        if($req->hasFile('foto')){
            $file = $req->file('foto');
            if(!$file->isValid()){
                return false;
            }
            $fileName = 'notizia.'.$file->extension();
            $file->storeAs('images', $fileName);
        }
        $news->save();
        return redirect()->route('home');

    }

    public function home()
    {
        $news = News::get();
        //dd($news[0]);
        return view('home')->with('news',$news[0]);
    }

}
