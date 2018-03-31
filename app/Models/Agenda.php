<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    function corsoId()
    {
        return $this->belongsTo(Corso::class, 'corso_id');
    }
}
