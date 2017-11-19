@extends('layouts.master_crud')

@section('titulo1', 'Inventario')

@section('titulo2', 'Inventarios')

@section('contenido')
  <a href="articulo/create" type="button" class="btn btn-secondary btn-sm " >Agregar articulos</a>
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Stock Mínimo</th>
				<th scope="col">Stock Máximo</th>
         		<th scope="col">Precio Total</th>
         		<th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($inv as $i)
			<tr>
				<td>{{$i->stock_min}}</td>
        	 	<td>{{$i->stock_max}}</td>
         		<td>{{$i->precioTotal}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/inventario/{{$i->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger btn-sm">Eliminar</button>
						<a href="inventario/{{$i->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
					</form>
				</td>
			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha creado su inventario.</h2>
        </div>
			@endforelse
		</tbody>

	</table>
	

@endsection
