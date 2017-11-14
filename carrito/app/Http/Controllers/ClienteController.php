<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Cliente;
use App\User;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes =Cliente::join('rols', 'clientes.roles_id', '=', 'rols.id')
      ->join('users', 'users.id', '=', 'clientes.users_id')
      ->select('users.name', 'rols.nombre_rol', 'clientes.id', 'clientes.nombres', 'clientes.apellidos', 'clientes.direccion' , 'clientes.pais', 'clientes.ciudad')->paginate(2);
      return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Rol::where('nombre_rol', 'like', 'Cliente')->get();
      $usuarios = User::all();
      return view('cliente.create')->with('roles', $roles)->with('usuarios', $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cli = new Cliente($request->all());
      $cli->users_id = $request->get('users_id');
      $cli->roles_id = $request->get('roles_id');
      $cli->save();

      return redirect('/cliente');
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
      $cliente = Cliente::findOrFail($id);
      $roles = Rol::where('nombre_rol', 'like', 'Cliente')->get();
      $userSpecific = User::with('cliente')->where('id', $cliente->users_id)->get();
      $users = User::all();
       return view('cliente.edit')->with('cliente', $cliente)->with('roles', $roles)->with('user', $users)->with('specific', $userSpecific);
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

      $clientes = Cliente::findOrFail($id);

      $clientes->update($request->all());

      return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Cliente::destroy($id);
      return redirect('/cliente');
    }

    public function trash()
    {
      $clie = Cliente::onlyTrashed()->paginate(2);
      return view('cliente.trash', compact('clie'));
    }

    public function restore($id)
    {
        $clie = Cliente::findOrFail($id);

        $clie->restore();
        return redirect('/cliente');
    }

}
