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
        return view('home')->with('news',$news[0]);
    }

}
