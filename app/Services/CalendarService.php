<?php


namespace App\Services;


use App\Models\Calendar;
use Carbon\Carbon;
use function dd;

class CalendarService
{
    public function index()
    {
        return Calendar::with('course')->where('mezza', null)->orderBy('giorno')->orderBy('orario')->get();
    }

    public function elimina($id)
    {
        /*$id2 = $id++;*/
        Calendar::destroy($id);
        /*Calendar::destroy($id2);*/
    }

    public function aggiungi($request)
    {
        $primo = new Calendar();
        $primo->giorno = $request->giorno;
        $primo->mezza = null;
        $primo->course_id = $request->course_id;
        $primo->orario = $request->orario;
        $primo->save();

/*        $minuti = Carbon::parse($request->orario)->minute;
        $ora = Carbon::parse($request->orario)->hour;

        if ($minuti == 0){
            $minuti = '30';
        } else {
            $ora++;
            $minuti = '00';
        }

        $secondo = new Calendar();
        $secondo->giorno = $request->giorno;
        $secondo->mezza = 1;
        $secondo->course_id = $request->course_id;
        $secondo->orario = $ora.':'.$minuti.':00';
        $secondo->save();*/
    }
}
