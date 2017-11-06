<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Rol;
use App\User;
use App\Models\Inventario;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function create()
    {
        $roles = Rol::where('nombre_rol', 'like', 'Empresa')->get();
        $usuarios = User::all();
        return view('empresa.create')->with('roles', $roles)->with('usuarios', $usuarios);
    }

    
    public function store(Request $request)
    {
        //Empresa::create($request->all());
        $empresa = new Empresa($request->all());
        $empresa->users_id = $request->get('users_id');
        $empresa->roles_id = $request->get('roles_id');
        $empresa->save();
        
        return redirect('/empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
