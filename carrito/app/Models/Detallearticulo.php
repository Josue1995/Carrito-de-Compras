<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detallearticulo extends Model
{
   use SoftDeletes;

	protected $dates = [
    'deleted_at'
  ];

    protected $fillable = [
      'descripcion_articulo',
      'nombre_articulo'
    ];

    public function articulo(){
      
        return $this->hasMany('App\Models\Articulo');
    }

}
