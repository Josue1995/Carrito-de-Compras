<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $dates = [

    'deleted_at'
  ];

    protected $fillable = [
    'nombre_departamento', 'inventario_id'
    ];
      
    public function inventario()
    {
      return $this->belongsTo('App\Models\Inventario');
    }
    public function subclasificacion()
    {
      return $this->hasMany('App\Models\Subclasificacion');
    }
    public function articulo()
      {
        return $this->belongsTo('App\Models\Articulo');
      }
}
