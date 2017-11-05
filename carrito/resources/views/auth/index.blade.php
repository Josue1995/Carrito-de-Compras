@extends('layouts.master_crud')

@section('titulo1', 'usuario')

@section('titulo2', 'usuarios')

@section('contenido')
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">nombre de usuario</th>
				<th scope="col">email</th>
				<th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($user as $users)
			<tr>
				<td>{{$users->id}}</td>
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/usuario/{{$users->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger btn-sm">Eliminar</button>
						<a href="usuario/{{$users->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
						
					</form>

				</td>
          		
			</tr>
			@empty
				<h2>Aún no ha creado usuarios.</h2>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$user->links()}}
	</div>

@endsection
