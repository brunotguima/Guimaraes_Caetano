<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listarep extends Model {

    public function filme() {
        return $this->belongsToMany('App\Filme', 'filme_listarep', 'listarep_id', 'filme_id');
    }

    public function user() {
        return $this->belongsToMany('App\User');
    }

}
