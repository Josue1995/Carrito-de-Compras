<?php

namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
  protected $dates = [
    'deleted_at'
  ];
    public function articulos()
    {
      return $this->hasMany('App\Models\Articulo');
    }
    public function usuario()
    {
      return $this->belongsTo('App\User');
    }
}
