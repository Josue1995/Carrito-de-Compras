<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    protected $fillable = [
      'nombre_empresa', 'telefono', 'direccion_empresa', 'correo_electronico', 'users_id', 'roles_id', 'inventario_id'
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
