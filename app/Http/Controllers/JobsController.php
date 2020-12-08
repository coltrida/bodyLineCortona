<?php

namespace App\Http\Controllers;

use App\Models\Job;
use function compact;
use Illuminate\Http\Request;
use function view;

class JobsController extends Controller
{
    public function index() {
        $jobs = Job::orderBy('created_at')->get();
        return view('jobs.jobs', compact('jobs'));
    }

    public function gestisci() {
        return view('jobs.gestionejobs');
    }

    public function inserisci(Request $request) {
        $job = new Job();
        $job->titolo = $request->titolo;
        $job->testo = $request->testo;
        $res = $job->save();
        return ''.$res;
    }

    public function lista() {
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return compact('jobs');
    }

    public function elimina(Job $job) {
        $res = $job->delete();
        return ''.$res;
    }

    public function visualizza(Job $job) {
        return compact('job');
    }

    public function candidati(Job $job) {
        return view('jobs.candidati', compact('job'));
    }

}
