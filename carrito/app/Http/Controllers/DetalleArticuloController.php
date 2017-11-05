<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detallearticulo;

class DetalleArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $det = Detallearticulo::paginate(2);
      return view('detalleArticulo.index', compact('det'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detalleArticulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Detallearticulo::create($request->all());

      return redirect('/detalle');
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
        $det = Detallearticulo::findOrFail($id);

        return view('detalleArticulo.edit', compact('det'));
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
      $det = Detallearticulo::findOrFail($id);

      $det->update($request->all());

      return redirect('/detalle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detallearticulo::destroy($id);
        return redirect('/detalle');
    }
    public function trash()
    {
      $det = Detallearticulo::onlyTrashed()->paginate(2);
      return view('detalleArticulo.trash', compact('det'));
    }
}
