<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subclasificacion extends Model
{
    protected $dates = [
      'deleted_at'
    ];
    public function inventario()
    {
      return $this->belongsTo('App\Models\Inventario');
    }
    public function departamento()
    {
      return $this->belongsTo('App\Models\Departamento');
    }
    public function articulo()
    {
      return $this->belongsToMany('App\Models\Articulo');
    }
}
