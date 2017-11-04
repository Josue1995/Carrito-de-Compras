<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detallearticulo extends Model
{
    return $this->hasMany('App\Models\Articulo');
}
