<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    public function carrito()
    {
      return $this->belongsTo('App\Models\Carrito');
    }
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol',
    ];

    protected $dates = [
    'deleted_at'
    ];
    
     protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
