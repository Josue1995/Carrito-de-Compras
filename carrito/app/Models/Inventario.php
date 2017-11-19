<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventario extends Model
{
    use SoftDeletes; 

    protected $fillable = [
      'stock_min',
      'stock_max',
      'precioTotal',
      'empresa_id'
    ];

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
