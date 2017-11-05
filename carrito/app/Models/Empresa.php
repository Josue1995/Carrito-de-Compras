<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
      'nombre_empresa', 
    ];

    protected $dates = [
    'deleted_at'
  ];

    public function inventario()
    {
      return $this->hasOne('App\Models\Inventario');
    }
    public function user()
    {
      return $this->hasOne('App\User');
    }
    public function rol()
    {
      return $this->belongsTo('App\Models\Rol');
    }
}
