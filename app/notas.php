<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    return $this->belongsTo('App\Post');
}
