<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class StaffController extends Controller
{
    public function index()
    {
        return view('staff.listastaff');
    }
}
