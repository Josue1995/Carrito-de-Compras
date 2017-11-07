@extends('layouts.master_crud')

@section('titulo1', 'Empresa')

@section('titulo2', 'Empresas, editar')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/empresa/{{$empresas->id}}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre_empresa">Nombre empresa</label>
      <input type="text" name="nombre_empresa" class="form-control" id="nombre_empresa" aria-describedby="rolHelp" value = "{{$empresas->nombre_empresa}}" required>
      <small id="rolHelp" class="form-text text-muted">Edite los datos de laempresa empezando por el nombre.</small>
    </div>
    <div class="form-group">
      <label for="telefono">Telefono</label>
      <input type="tel" name="telefono" class="form-control" id="telefono" value = "{{$empresas->telefono}}" required>
    </div>
    <div class="form-group">
      <label for="direccion_empresa">Direccion</label>
      <input type="text" name="direccion_empresa" class="form-control" id="direccion_empresa" value = "{{$empresas->direccion_empresa}}" required>
    </div>
    <div class="form-group">
      <label for="correo_electronico">Email</label>
      <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value = "{{$empresas->correo_electronico}}" required>
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