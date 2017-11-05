@extends('layouts.master_crud')

@section('titulo1','empresa')

@section('titulo2','empresas')

@section('contenido')
	<form action="/Carrito-de-Compras/carrito/public/empresa" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_empresa">Nombre empresa</label>
      <input type="text" name="nombre_empresa" class="form-control" id="nombre_empresa" aria-describedby="rolHelp" placeholder="Ingrese el nombre de su empresa" required>
      <small id="rolHelp" class="form-text text-muted">Registre su empresa empezando por el nombre.</small>
    </div>
    <div class="form-group">
    	<label for="telefono">Telefono</label>
    	<input type="tel" name="telefono" class="form-control" id="telefono" placeholder="Nombre de la empresa" required>
    </div>
    <div class="form-group">
    	<label for="direccion_empresa">Direccion</label>
    	<input type="text" name="direccion_empresa" class="form-control" id="direccion_empresa" placeholder="Direccion de la empresa" required>
    </div>
    <div class="form-group">
    	<label for="correo_electronico">Email</label>
    	<input type="email" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Email de la empresa">
    </div>
    <div class="form-group">
    	<label for="users_id"></label>
        <select class="custom-select">
            <option selected>Seleccione el dueño de la empresa</option>
            @forelse($usuarios as $user)
            <option required name="users_id" id="users_id">id: {{$user->id}} nombre: {{$user->name}}</option>
            @empty
            <option>No se encontraron roles</option>
            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="roles_id"></label>
        <select class="custom-select">
            <option selected>Seleccione el rol</option>
            @forelse($roles as $rol)
            <option required name="roles_id" id="roles_id">id: {{$rol->id}} nombre: {{$rol->nombre_rol}}</option>
            @empty
            <option>No se encontraron roles</option>
            @endforelse
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection