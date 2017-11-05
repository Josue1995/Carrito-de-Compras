@extends('layouts.master_crud')

@section('titulo1', 'detalle artículo')

@section('titulo2', 'Gestión de Detalle Artículos')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/detalle" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_detalle">Detalle del artículo</label>
      <input type="text" name="descripcion_articulo" class="form-control" id="descripcion_articulo" aria-describedby="detalleHelp" placeholder="Ingrese la descripción del artículo" required>
      <input type="text" name="nombre_articulo" class="form-control" id="nombre_articulo" aria-describedby="detalleHelp" placeholder="Ingrese el nombre del artículo" required>
      <small id="detalleHelp" class="form-text text-muted">Los detalle de los artículos.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
