@extends('layouts.master_crud')

@section('titulo1', 'rol')

@section('titulo2', 'roles')

@section('contenido')
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">nombre rol</th>
				<th scope="col">acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($roles as $rol)
			<tr>
				<td>{{$rol->id}}</td>
				<td>{{$rol->nombre_rol}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/rolTrashed/{{$rol->id}}" method="post">
						{{csrf_field()}}

						<button class="btn btn-success btn-sm">Recuperar</button>

					</form>
				</td>
			</tr>
			@empty
				<h2>Aún no ha eliminado articulos.</h2>
			@endforelse
		</tbody>

    <div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
	</table>
		{{$roles->links()}}
	</div>

@endsection
