@extends('layouts.master_crud')

@section('titulo1', 'Detalle Artículo')

@section('titulo2', 'Detalle artículo, editar')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/detalle/{{ $det->id}}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_detalle">Detalle del artículo</label>
      <input type="text" name="descripcion_articulo" class="form-control" id="descripcion_articulo" aria-describedby="detalleHelp"  value="{{$det->descripcion_articulo}}" required autofocus>
      <label for="nombre_articulo">Nombre del articulo</label>
      <input type="text" name="nombre_articulo" class="form-control" id="nombre_articulo" aria-describedby="detalleHelp" value="{{$det->nombre_articulo}}" required>
      <small id="detalleHelp" class="form-text text-muted">Editar Detalle Artículo.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
