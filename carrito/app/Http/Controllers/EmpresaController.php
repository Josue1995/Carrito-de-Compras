<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Models\Inventario;


class EmpresaController extends Controller
{

    public function index()
    {

        $empresas =Empresa::join('users', 'users.id', '=', 'empresas.users_id')
        ->select('users.name', 'empresas.id', 'nombre_empresa', 'telefono', 'direccion_empresa' , 'correo_electronico', 'inventario_id')->paginate(2);
        return view('empresa.index', compact('empresas'));
    }

    public function trash()
    {
        $trashedEmpresas = Empresa::onlyTrashed()->paginate(2);
        return view('empresa.trash', compact('trashedEmpresas'));
    }

    public function create()
    {
        
        $usuarios = User::all();
        return view('empresa.create')->with('usuarios', $usuarios);
    }


    public function store(Request $request)
    {
        //Empresa::create($request->all());
        $empresa = new Empresa($request->all());
        $empresa->users_id = $request->get('users_id');
        
        $empresa->save();
        if(Auth::user()->rol=='Empresa'){
            return redirect('/home');
        }
        return redirect('/empresa');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

        $empresas = Empresa::findOrFail($id);
        $userSpecific = User::with('empresa')->where('id', $empresas->users_id)->get();
        $users = User::all();
         return view('empresa.edit')->with('empresas', $empresas)->with('user', $users)->with('specific', $userSpecific);
    }

    public function update(Request $request, $id)
    {
        $empresas = Empresa::findOrFail($id);

        $empresas->update($request->all());

        return redirect('/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empresa::destroy($id);
        return redirect('/empresa');
    }

}
