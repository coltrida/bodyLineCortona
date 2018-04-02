<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use function view;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::orderBy('nome')->get();
        //dd($staff);
        return view('staff.listastaff')->with('staff',$staff);

    }

    public function infostaff(Staff $staff)
    {
        return view('staff.infostaff')->with('staff',$staff);
    }
}
