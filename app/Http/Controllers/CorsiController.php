<?php

namespace App\Http\Controllers;

use App\Models\Corso;
use Illuminate\Http\Request;

class CorsiController extends Controller
{
    public function index()
    {
/*        $corsi = Corso::get();

        return view('corsi.listacorsi',
            [
                'corsi' => $corsi,

            ]);*/
    }


    public function storia()
    {
        return view('storia');
    }

    public function info(Corso $corso)
    {
        return view('corsi.infocorso')->with('corso',$corso);
    }
}
