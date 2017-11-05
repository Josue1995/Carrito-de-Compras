<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $dates = [
    'deleted_at'
  ];
    public function departamento()
    {
      return $this->hasMany('App\Models\Departamento');
    }
    public function empresa()
    {
      return $this->belongsTo('App\Models\Empresa');
    }
    public function subclasificacion()
    {
      return $this->hasMany('App\Models\Subclasificacion');
    }
}
