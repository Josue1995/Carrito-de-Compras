@extends('layouts.master_crud')

@section('titulo1', 'usuario')

@section('titulo2', 'usuarios, editar')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/usuario/{{ $user->id }}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Nombre de usuario</label>
      <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" aria-describedby="rolHelp" placeholder="Editar nombre de usuario" required>
      <small id="rolHelp" class="form-text text-muted">Editar el nombre del usuario.</small>
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" aria-describedby="rolHelp" placeholder="Editar el correo del usuario" required>
      <small id="rolHelp" class="form-text text-muted">Editar el correo del usuario.</small>
    </div>


    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="text" name="password" value="{{$user->password}}" class="form-control" id="password" aria-describedby="rolHelp" placeholder="Editarar la Contraseña de usuario" required>
      <small id="rolHelp" class="form-text text-muted">Editar la contraseña del usuario.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
