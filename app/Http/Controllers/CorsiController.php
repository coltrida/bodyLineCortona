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

    public function home()
    {
        return view('home');
    }

    public function storia()
    {
        return view('storia');
    }
}
