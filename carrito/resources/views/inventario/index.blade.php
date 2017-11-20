@extends('layouts.master_crud')

@section('titulo1', 'Inventario')

@section('titulo2', 'Inventarios')

@section('contenido')
  
  @parent
	<table class="table table-responsive">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Stock Mínimo</th>
				<th scope="col">Stock Máximo</th>
         		<th scope="col">Precio Total</th>
         		
			</tr>

		</thead>
		<tbody>
			@forelse($inv as $i)
			<tr>
				<td>{{$i->stock_min}}</td>
        	 	<td>{{$i->stock_max}}</td>
         		<td>{{$i->precioTotal}}</td>
				
			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha creado su inventario.</h2>
        </div>
			@endforelse
		</tbody>

	</table>

	<a href="departamento/create" class="btn btn-primary" type="button">Crear depto.</a>
	<a href="inventarioMostrar" type="button" class="btn btn-success">Agregar articulo a depto.</a>
	@forelse($dep as $d)
	<table class="table table-responsive">
		<thead class="thead-dark">
		 
		 	<tr>
		 		<h3 class="text-center" scope="col">Departamento de : {{$d->nombre_departamento}}</h3>
		 	</tr>
			<tr>
				<th scope="col">Nombre del articulo</th>
				<th scope="col">Descripcion</th>
				<th scope="col">Titulo del articulo</th>
				<th scope="col">Precio</th>
				<th scope="col">Descuento</th>
				<th scope="col">Existencias</th>
				<th scope="col">Imagen del articulo</th>
			</tr>
		</thead>
		<tbody>
		
			@forelse($articulos as $a)
			  @if($d->id == $a->departamento_id)	  
				<tr>
					<td>{{$a->detallearticulo->nombre_articulo}}</td>
					<td>{{$a->detallearticulo->descripcion_articulo}}</td>
					<td>{{$a->titulo_articulo}}</td>
					<td>{{$a->precio}}</td>
					<td>{{$a->descuento}}</td>
					<td>{{$a->existencias}}</td>
					<td><img src="imagenes/articulos/{{$a->imagen_articulo}}"></td>
				</tr>	
			  @endif

			@empty
			<div class="card">
  				<div class="card-body">
    				No hay articulos en el catalogo, desea crearlos de click al boton.
    				<a href="departamento/create" class="btn btn-default">Crear</a>
  				</div>
			</div>
			@endforelse
		</tbody>
		@empty
			<div class="card">
  				<div class="card-body">
    				No hay departamentos creados, desea crearlos de click al boton.
    				<a href="departamento/create" class="btn btn-default">Crear</a>
  				</div>
			</div>	
		@endforelse
	</table>

@endsection
