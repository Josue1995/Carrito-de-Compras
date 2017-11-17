@extends('layouts.master_crud')

@section('titulo1', 'Clientes')

@section('titulo2', 'Clientes')

@section('contenido')
  <a href="cliente/create" type="button" class="btn btn-secondary btn-sm " >Crear Cliente</a>
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Nombre del cliente</th>
				<th scope="col">Apellidos del cliente</th>
         <th scope="col">Dirección</th>
         <th scope="col">País</th>
         <th scope="col">Ciudad</th>
         <th scope="col">Usuario</th>
         <th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($clientes as $cli)
			<tr>
				<td>{{$cli->id}}</td>
				<td>{{$cli->nombres}}</td>
        <td>{{$cli->apellidos}}</td>
        <td>{{$cli->direccion}}</td>
        <td>{{$cli->pais}}</td>
        <td>{{$cli->ciudad}}</td>
        <td>{{$cli->name}}</td>
        
				<td>
					<form action="/Carrito-de-Compras/carrito/public/cliente/{{$cli->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger btn-sm">Eliminar</button>
						<a href="cliente/{{$cli->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
					</form>
				</td>
			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha creado clientes.</h2>
        </div>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$clientes->links()}}
	</div>

@endsection
