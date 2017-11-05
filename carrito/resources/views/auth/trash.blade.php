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
				<th scope="col">fecha de eliminacion</th>
				<th scope="col">acciones</th>
			</tr>
			
		</thead>
		<tbody>
			@forelse($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->deleted_at}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/usuarioTrashed/{{$user->id}}" method="post">
						{{csrf_field()}}
						
						<button class="btn btn-success btn-sm">Recuperar</button>
						
					</form>
				</td>
			</tr>
			@empty
				<h2>Aún no ha eliminado usuarios.</h2>
			@endforelse	
		</tbody>
		
	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$users->links()}}
	</div>

@endsection
