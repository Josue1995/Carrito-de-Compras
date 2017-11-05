@extends('layouts.master_crud')

@section('titulo1', 'rol')

@section('titulo2', 'roles, editar')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/rol/{{ $roles->id }}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_rol">Nombre del rol</label>
      <input type="text" name="nombre_rol" class="form-control" id="nombre_rol" aria-describedby="rolHelp" placeholder="Ingrese el rol" value = "{{$roles->nombre_rol}}"  required>
      <small id="rolHelp" class="form-text text-muted">Editar rol.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
