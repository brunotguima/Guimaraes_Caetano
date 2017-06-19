<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listarep extends Model {

    public function filme() {
        return $this->belongsToMany('App\Filme', 'filme_listarep', 'filme_id', 'listarep_id')
                        ->withTimestamps();
    }

    public function user() {
        return $this->belongsToMany('App\User')
                        ->withTimestaps();
    }

}
