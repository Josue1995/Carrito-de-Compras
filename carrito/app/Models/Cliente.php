<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{


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
