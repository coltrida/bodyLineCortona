<?php

namespace App\Http\Controllers;

use App\Models\Listino;
use Illuminate\Http\Request;

class ListinoController extends Controller
{
    public function index()
    {
        $listino = Listino::orderBy('id')->get();
        //dd($listino);
        return view('listino.infolistino')->with('listino',$listino);
    }
}
