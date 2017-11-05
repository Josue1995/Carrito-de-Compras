@extends('layouts.master_crud')

@section('titulo1', 'Detalle artículo')

@section('titulo2', 'Detalle artículos')

@section('contenido')
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Nombre Artículo</th>
				<th scope="col">Descripción artículo</th>
        <th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($det as $d)
			<tr>
				<td>{{$d->id}}</td>
				<td>{{$d->nombre_articulo}}</td>
        <td>{{$d->descripcion_articulo}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/detalleTrashed/{{$d->id}}" method="post">
						{{csrf_field()}}

						<button class="btn btn-success btn-sm">Recuperar</button>

					</form>
				</td>
			</tr>
			@empty
				<h2>Aún no ha eliminado articulos.</h2>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$det->links()}}
	</div>

@endsection
