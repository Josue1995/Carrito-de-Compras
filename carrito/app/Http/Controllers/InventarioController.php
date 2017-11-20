<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Articulo;
use App\Models\Departamento;
use App\Models\Subclasificacion;
use Illuminate\Support\Facades\Auth;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $inv = Inventario::with('empresa')->where('empresa_id', Auth::user()->empresa->id)->get();
      $dep = Departamento::with('inventario')->where('inventario_id', Auth::user()->empresa->inventario->id)->get();
      $articulos = Articulo::with('departamento')->where('catalogo_id', Auth::user()->empresa->catalogo->id)->whereHas('departamento')->orderBy('departamento_id')->get();
      return view('inventario.index')->with('inv', $inv)->with('dep', $dep)->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
      $inv = Inventario::findOrFail($id);

      return view('inventario.edit', compact('inv'));
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
      $inv = Inventario::findOrFail($id);

      $inv->update($request->all());

      return redirect('/inventario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Inventario::destroy($id);
      return redirect('/inventario');
    }

    public function restore($id)
    {
        $inv = Inventario::findOrFail($id);

        $inv->restore();
        return redirect('/inventario');
    }

    public function trash()
    {
        $inv = Inventario::onlyTrashed()->paginate(2);
        return view('inventario.trash', compact('inv'));
    }

    public function mostrarArticulo()
    {   
        $articulo = Articulo::with('catalogo')->where('catalogo_id', Auth::user()->empresa->catalogo->id)->paginate(3);
        return view('inventario.agregarDepto')->with('articulo', $articulo);
    }

}
