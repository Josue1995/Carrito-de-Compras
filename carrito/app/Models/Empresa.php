<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{   
    use SoftDeletes;

    protected $fillable = [
       'users_id' ,'nombre_empresa', 'telefono', 'direccion_empresa', 'correo_electronico', 
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
    
}
