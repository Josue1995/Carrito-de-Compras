@extends('layouts.master_crud')

@section('titulo1', 'usuario')

@section('titulo2', 'usuarios')

@section('contenido')
	<form action="/Carrito-de-Compras/carrito/public/usuario" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Nombre de usuario</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="rolHelp" placeholder="Ingrese el nombre de usuario" required>
      <small id="rolHelp" class="form-text text-muted">Ingrese el nombre del usuario.</small>
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="rolHelp" placeholder="Ingrese el correo del usuario" required>
      <small id="rolHelp" class="form-text text-muted">Ingrese el correo del usuario.</small>
    </div>


    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" name="password" class="form-control" id="password" aria-describedby="rolHelp" placeholder="Ingrese la Contraseña de usuario" required>
      <small id="rolHelp" class="form-text text-muted">Ingrese la contraseña del usuario.</small>
    </div>

    <div class="form-group">
      <label for="rol">Rol</label>
      <select class="textWidth form-control" name="rol" id="rol" type="text">
          <option disabled selected> -- Seleccione una opción -- </option>
          <option>Empresa</option>
          <option>Cliente</option>
     </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection