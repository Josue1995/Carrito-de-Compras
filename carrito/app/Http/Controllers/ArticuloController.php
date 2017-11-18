<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Detallearticulo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulo = Articulo::join('detallearticulos', 'articulos.detallearticulo_id', '=', 'detallearticulos.id')->select('titulo_articulo', 'precio', 'descuento', 'existencias', 'imagen_articulo', 'descripcion_articulo', 'nombre_articulo', 'articulos.id')->paginate(2);
        return view('articulo.index')->with('articulos', $articulo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalle = Detallearticulo::all();
        return view('articulo.create')->with('detalle', $detalle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo = new Articulo($request->all());
        $articulo->detallearticulo_id = $request->get('detallearticulo_id');
        $this -> validate($request, [
            'imagen_articulo' => 'required|image'
            ]);
        
        $extension = $request->file('imagen_articulo')->getClientOriginalExtension();
        $nombre = $request->file('imagen_articulo')->getClientOriginalName();
        $file_name = $nombre. '.' . $extension;
        Image::make($request->file('imagen_articulo'))->resize(144,144)->save('imagenes/articulos/' . $file_name );
        $articulo->imagen_articulo = $file_name;
        
        
        $articulo->save();
        if(Auth::user()->rol == 'Empresa'){
            return redirect('/catalogo');
        }

        return redirect('/articulo');
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
