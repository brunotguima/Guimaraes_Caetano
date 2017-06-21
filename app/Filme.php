<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model {

    public function genero() {
        return $this->belongsTo('App\Genero');
    }

    public function listareps() {
<<<<<<< HEAD
        return $this->belongsToMany('App\Listarep','filme_listarep', 'filme_id', 'listarep_id');
=======
        return $this->belongsToMany('App\Listarep');
>>>>>>> origin/master
    }

}
