<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function  getPathAttribute(){

        $url = 'storage/'.$this->foto;
        return $url;
    }
}
