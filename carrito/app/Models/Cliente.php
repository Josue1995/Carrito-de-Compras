<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'nombres',
		'apellidos',
		'direccion',
		'pais',
		'ciudad',
		'users_id',
		'roles_id'
	];

	protected $dates = [
    'deleted_at'
  ];

  public function user()
  {
    return $this->hasOne('App\User');
  }
  public function rol()
  {
    return $this->belongsTo('App\Models\Rol');
	}
}
