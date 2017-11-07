@extends('layouts.master_crud')

@section('titulo1', 'Empresa')

@section('titulo2', 'Empresas')

@section('contenido')
  <a href="empresa/create" type="button" class="btn btn-secondary btn-sm " >Crear Empresa</a>
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">id_inventario</th>
				<th scope="col">Rol</th>
         		<th scope="col">Usuario</th>
         		<th scope="col">Nombre empresa</th>
         		<th scope="col">Telefono</th>
         		<th scope="col">Direccion empresa</th>
         		<th scope="col">Correo Electronico</th>
         		<th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($empresas as $e)
			<tr>
				<td>{{$e->id}}</td>
				<td>{{$e->id_inventario}}</td>
         		<td>{{$e->nombre_rol}}</td>
         		<td>{{$e->name}}</td>
         		<td>{{$e->nombre_empresa}}
         		<td>{{$e->telefono}}</td>
         		<td>{{$e->direccion_empresa}}</td>
         		<td>{{$e->correo_electronico}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/empresa/{{$e->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger btn-sm">Eliminar</button>
						<a href="empresa/{{$e->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
					</form>
				</td>
			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha creado empresas.</h2>
        </div>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$empresas->links()}}
	</div>

@endsection
