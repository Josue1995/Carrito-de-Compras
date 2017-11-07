@extends('layouts.master_crud')

@section('titulo1','Cliente')

@section('titulo2','clientes')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/cliente/{{ $cliente->id}}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_cliente">Nombres</label>
      <input type="text" name="nombres" class="form-control" id="nombres" aria-describedby="clienteHelp" value="{{$cliente->nombres}}" required>
      <small id="clientelHelp" class="form-text text-muted">Registrar nombres.</small>
    </div>
    <div class="form-group">
      <label for="apellidos">Apellidos </label>
      <input type="text" name="apellidos" class="form-control" id="apellidos" aria-describedby="clienteHelp" value="{{$cliente->apellidos}}" required>
      <small id="clientelHelp" class="form-text text-muted">Registrar apellidos.</small>
    </div>
    <div class="form-group">
    	<label for="direccion">Dirección</label>
    	<input type="text" name="direccion" class="form-control" id="direccion" value="{{$cliente->direccion}}" required>
    </div>
    <div class="form-group">
      <label for="pais">País</label>
    	<input type="text" name="pais" id="pais" class="form-control" value="{{$cliente->pais}}">
    </div>
    <div class="form-group">
      <label for="ciudad">Ciudad</label>
     <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{$cliente->ciudad}}">
    </div>
    <div class="form-group">
            <label aria-describedby="userHelp" for="users_id">Seleccione el usuario</label><br>
            <small id="userHelp" class="form-text text-muted">
            @foreach($specific as $s)
             Su anterior usuario era {{$s->name }}
            @endforeach
            </small>
            <select class="textWidth form-control" name="users_id" id="users_id" type="text">
                <option disabled="" selected> -- seleccione una opcion -- </option>
                @foreach($user as $users)
                  <option value="{{$users->id}}">
                    {{$users->name}}
                  </option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
            <label for="roles_id">Seleccione el rol </label><br>
            <select class="textWidth form-control" name="roles_id" id="roles_id" type="text">
                @foreach($roles as $rol)
                  <option value="{{$rol->id}}" selected>
                    {{$rol->nombre_rol}}
                  </option>
                @endforeach
            </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection
