<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Empresa extends Model
{   
    use SoftDeletes;

    protected $fillable = [
       'user_id' ,'nombre_empresa', 'telefono', 'direccion_empresa', 'correo_electronico', 
    ];

    protected $dates = [
    'deleted_at'
    ];

     protected $table = 'empresas';

    public function inventario()
    {
      return $this->hasOne('App\Models\Inventario');
    }
    public function user()
    {
      return $this->hasOne('App\Models\User');
    }

    public function catalogo()
    {
        return $this->hasOne('App\Models\Catalogo');
    }
    
}
