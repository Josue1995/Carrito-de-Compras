<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    

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
}
