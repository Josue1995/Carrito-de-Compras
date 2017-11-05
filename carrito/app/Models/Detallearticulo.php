<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detallearticulo extends Model
{
	protected $dates = [
    'deleted_at'
  ];

    return $this->hasMany('App\Models\Articulo');
}
