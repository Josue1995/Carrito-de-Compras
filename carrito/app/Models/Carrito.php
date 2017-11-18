<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrito extends Model
{

  protected $dates = [

    'deleted_at'
  ];
    public function articulos()
    {
      return $this->hasMany('App\Models\Articulo');
    }
    public function usuario()
    {
      return $this->hasOne('App\Models\User');
    }
}
