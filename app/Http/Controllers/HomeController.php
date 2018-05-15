<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        $x = rand(1,20);
        $y = rand(1,20);
        $versione = "?ver=$x.$y";
        return view('home')->with('news',$news[0])->with('versione',$versione);
    }
}
