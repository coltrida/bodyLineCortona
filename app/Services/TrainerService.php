<?php


namespace App\Services;


use App\Models\Trainer;
use Illuminate\Support\Facades\Storage;

class TrainerService
{
    public function index()
    {
        return Trainer::orderBy('nome')->get();
    }

    public function elimina($id)
    {
        $trainer = Trainer::find($id);
        if ($trainer->foto){
            Storage::disk('public')->delete('trainers/'.$trainer->foto);
        }
        $trainer->delete();
    }

    public function aggiungi($request)
    {
        $trainer = new Trainer();
        $trainer->nome = $request->nome;
        $trainer->cognome = $request->cognome;
        $trainer->descrizione = $request->descrizione;
        $trainer->save();

        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = $trainer->id . '.' . $file->extension();
            Storage::disk('public')->putFileAs('/trainers', $file, $filename);
          //  $file->storeAs('public/trainers/', $filename);
            $trainer->foto = $filename;
            $trainer->save();
        }
    }
}
