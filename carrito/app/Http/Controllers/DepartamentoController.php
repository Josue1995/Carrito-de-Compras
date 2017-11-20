<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Articulo;
use Illuminate\Support\Facades\Auth;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dep = new Departamento($request->all());
        $dep->inventario_id = Auth::user()->empresa->inventario->id;
        $dep->save();
        if (Auth::user()->rol == 'Empresa') {
            return redirect('/inventario');
        }
        return redirect('/departamento');

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

    public function mostrarDepto($id)
    {

        if(Auth::user()->rol == 'Empresa')
        {
            $dep = Departamento::with('inventario')->where('inventario_id', Auth::user()->empresa->inventario->id)->get();
            $artId = $id;
            return view('dep.index')->with('dep', $dep)->with('artId', $artId);
        }
        elseif (Auth::user()->rol == 'Admin') {
            $dep = Departamento::all();
            
            return view('dep.index')->with('dep', $dep);
        }
        else
            return redirect('/home');
    }

    public function guardarArticulo(Request $request ,$id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->departamento_id = $request->get('departamento_id');
        $articulo->update($request->all());
        return redirect('inventarioMostrar/');
    }
}
