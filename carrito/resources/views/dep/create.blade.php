@extends('layouts.master_crud')

@section('titulo1', 'Departamento')

@section('titulo2', 'Departamentos')

@section('contenido')
	
  <form action="/Carrito-de-Compras/carrito/public/departamento" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_departamento">Nombre de departamento</label>
      <input type="text" name="nombre_departamento" class="form-control" id="nombre_departamento" aria-describedby="depHelp" placeholder="Ingrese el nombre del departamento" required>
      <small id="inventarioHelp" class="form-text text-muted">Ingrese el nombre del departamento, sirve para clasificar los articulos.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection