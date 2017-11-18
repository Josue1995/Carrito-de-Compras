<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Cliente extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'nombres',
		'apellidos',
		'direccion',
		'pais',
		'ciudad',
		'user_id',
	];

	protected $dates = [
    'deleted_at'
  ];

  public function user()
  {
    return $this->hasOne('App\Models\User');
  }
 
}
