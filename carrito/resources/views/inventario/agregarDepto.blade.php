@extends('layouts.master_crud')

@section('titulo1', 'Articulos')

@section('titulo2', 'articulos sin depto.')

@section('contenido')
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
         		<th scope="col">Agregar depto</th>
			</tr>

		</thead>
		<tbody>
			@forelse($articulo as $a)
			@if($a->departamento_id == null)
			<tr>
				<td><img src="imagenes/articulos/{{$a->imagen_articulo}}"></td>
				<td>{{$a->detallearticulo->nombre_articulo}}</td>
        		<td>{{$a->detallearticulo->descripcion_articulo}}</td>
        		<td>{{$a->precio}}</td>
        		<td>{{$a->descuento}}</td>
        		<td>{{$a->existencias}}</td>
        		<td>{{$a->titulo_articulo}}</td>
            <td><a href="inventarioDeptos/{{$a->id}}" class="btn btn-success btn-sm">seleccionar depto</a></td>
				</tr>
			@endif
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