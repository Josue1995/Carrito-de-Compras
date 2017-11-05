<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detallearticulo extends Model
{
  use SoftDeletes;
    protected $fillable = [
      'descripcion_articulo',
      'nombre_articulo'
    ];
    protected $dates = [
      'deleted_at'
    ];
    public function articulo(){
        return $this->hasMany('App\Models\Articulo');
    }
}
