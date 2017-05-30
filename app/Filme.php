<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    public function genero()
    {
        return $this->belongsTo('App\Genero');
        return $this->belongsTo('App\Listarep');
    }
}