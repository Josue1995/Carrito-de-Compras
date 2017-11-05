@extends('layouts.master_crud')

@section('titulo1', 'Detalle artículo')

@section('titulo2', 'Detalles')

@section('contenido')
  <a href="detalle/create" type="button" class="btn btn-secondary btn-sm " >Crear Detalle</a>
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Descripción artículo</th>
        <th scope="col">Nombre artículo</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@forelse($det as $d)
			<tr>
				<td>{{$d->id}}</td>
				<td>{{$d->descripcion_articulo}}</td>
        <td>{{$d->nombre_articulo}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/detalle/{{$d->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger btn-sm">Eliminar</button>
						<a href="detalle/{{$d->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>

					</form>

				</td>

			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha creado Detalles.</h2>
        </div>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$det->links()}}
	</div>

@endsection
