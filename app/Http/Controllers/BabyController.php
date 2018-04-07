<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class BabyController extends Controller
{
    public function index()
    {
        return view('baby.visualizzababy');
    }
}
