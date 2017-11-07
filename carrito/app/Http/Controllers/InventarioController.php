<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;


class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $inv = Inventario::paginate(2);
      return view('inventario.index', compact('inv'));
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
      Inventario::create($request->all());

      return redirect('/inventario');
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

}
