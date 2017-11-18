<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogo extends Model
{	
	use SoftDeletes;

	protected $fillable = [
    'id', 'empresa_id'
    ];

	protected $dates = [
	'deleted_at'
	];

    public function articulo()
    {
    	return $this->hasMany('App\Models\Articulo');
    }

    public function empresa()
    {
    	return $this->belongsTo('App\Models\Empresa');
    }

    
}
