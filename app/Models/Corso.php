<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corso extends Model
{
    protected $table = 'corsi';

    function staffId()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }

}
