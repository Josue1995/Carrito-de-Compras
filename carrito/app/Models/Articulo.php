<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
  use SoftDeletes;

  protected $dates = [

    'deleted_at'
  ];

    public function carrito()
    {
      return $this->belongsTo('App\Models\Carrito');
    }
    public function detallearticulo()
    {
      return $this->belongsTo('App\Models\Detallearticulo');
    }
    public function departamento()
    {
      return $this->belongsTo('App\Models\Departamento');
    }
    public function subclasificacion()
    {
      return $this->belongsToMany('App\Models\Subclasificacion');
    }

    public function catalogo()
    {
      return $this->belongsTo('App\Models\Catalago');
    }
}
