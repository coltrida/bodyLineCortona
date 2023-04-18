<?php


namespace App\Services;

use Storage;
use function dd;

class PhotoService
{
    public function firstMain()
    {
        $directory = 'firstMain/';
        return Storage::disk('public')->files($directory);
    }

    public function secondMain()
    {
        $directory = 'secondMain/';
        return Storage::disk('public')->files($directory);
    }

    public function activities($numero)
    {
        $directory = "activities$numero/";
        return Storage::disk('public')->files($directory);
    }

    public function slotDisponibili($scelta)
    {
        if ($scelta == 'main'){
            return [
              'firstMain/image-1.jpg',
              'firstMain/image-2.jpg',
              'firstMain/image-3.jpg',
            ];
        } elseif ($scelta == 'second'){
            return [
                "secondMain/service-1.jpg",
                "secondMain/service-2.jpg",
                "secondMain/service-3.jpg",
                "secondMain/service-4.jpg",
            ];
        } else {
            return [
                "activities$scelta/image-1.jpg",
                "activities$scelta/image-2.jpg",
                "activities$scelta/image-3.jpg",
                "activities$scelta/image-4.jpg",

            ];
        }
    }

    public function aggiungi($request)
    {
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = $request->posizione;
            //$file->storeAs('public/', $filename);
            Storage::disk('public')->putFileAs('/', $file, $filename);
            //  $file->storeAs('public/trainers/', $filename);
        }
    }
}
