<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'nombre_rol'
  ];

  protected $dates = [
    'deleted_at'
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
