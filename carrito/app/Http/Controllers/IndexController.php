<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IndexController extends Controller
{
    public function empresas()
    {
    	

    	$empresa = Empresa::paginate(10);
    	return view('welcome')->with('empresa', $empresa);
    }
}
