@extends('layouts.master_crud')

@section('titulo1', 'Catalogo')

@section('titulo2', 'Mi catalogo de productos')

@section('contenido')
	<a href="articulo/create" type="button" class="btn btn-secondary btn-sm " >Crear Articulo</a>
	@parent
	
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Imagen del articulo</th>				
				<th scope="col">Nombre del articulo</th>
				<th scope="col">Descripcion del articulo</th>
         		<th scope="col">Precio</th>
         		<th scope="col">Descuento</th>
         		<th scope="col">Existencias</th>
         		<th scope="col">Titulo</th>
         		<th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($articulo as $a)
			<tr>
				<td><img src="imagenes/articulos/{{$a->imagen_articulo}}"></td>
				<td>{{$a->detallearticulo->nombre_articulo}}</td>
        		<td>{{$a->detallearticulo->descripcion_articulo}}</td>
        		<td>{{$a->precio}}</td>
        		<td>{{$a->descuento}}</td>
        		<td>{{$a->existencias}}</td>
        		<td>{{$a->titulo_articulo}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/cliente/{{$a->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger btn-sm">Eliminar</button>
						<a href="articulo/{{$a->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
					</form>
				</td>
			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha creado articulos.</h2>
        </div>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$articulo->links()}}
	</div>

@endsection