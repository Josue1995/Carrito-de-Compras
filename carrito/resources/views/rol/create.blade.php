@extends('layouts.master_crud')

@section('titulo1', 'rol')

@section('titulo2', 'roles')

@section('contenido')
  <form action="/rol" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_rol">Nombre del rol</label>
      <input type="text" name="nombre_rol" class="form-control" id="nombre_rol" aria-describedby="rolHelp" placeholder="Ingrese el rol" required>
      <small id="rolHelp" class="form-text text-muted">Los roles son para los usuarios que inician sesion.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
