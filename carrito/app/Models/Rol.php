<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  protected $fillable = [
    'nombre_rol'
  ];

  public function empresa()
  {
    return $this->hasMany('App\Models\Empresa');
  }
  public function cliente()
  {
    return $this->hasMany('App\Models\Cliente');
  }
}
