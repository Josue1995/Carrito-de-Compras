<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\User;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes =Cliente::join('users', 'users.id', '=', 'clientes.user_id')
      ->select('users.name', 'clientes.id', 'clientes.nombres', 'clientes.apellidos', 'clientes.direccion' , 'clientes.pais', 'clientes.ciudad')->paginate(2);
      return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
      $usuarios = User::all();
      return view('cliente.create')->with('usuarios', $usuarios);
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
      $cli->user_id = $request->get('user_id');
      
      $cli->save();
      if(Auth::user()->rol == 'Cliente'){
        return redirect('/home');
      }
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
      
      $userSpecific = User::with('cliente')->where('id', $cliente->user_id)->get();
      $users = User::all();
       return view('cliente.edit')->with('cliente', $cliente)->with('user', $users)->with('specific', $userSpecific);
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
