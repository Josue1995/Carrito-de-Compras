<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::paginate(2);
        return view('rol.index', compact('roles'));
    }

    public function trash()
    {
        $roles = Rol::onlyTrashed()->paginate(2);
        return view('rol.trash', compact('roles'));
    }

    public function create()
    {
        return view('rol.create');
    }

    public function store(Request $request)
    {
        Rol::create($request->all());

        return redirect('/rol');
    }
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Rol::findOrFail($id);

        return view('rol.edit', compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roles = Rol::findOrFail($id);

        $roles->update($request->all());

        return redirect('/rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::destroy($id);
        return redirect('/rol');
    }

    public function restore($id)
    {
        $roles = Rol::findOrFail($id);

        $roles->restore();
        return Redirect('/rol');
    }
}
