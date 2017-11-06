@extends('layouts.master_crud')

@section('titulo1', 'Inventario')

@section('titulo2', 'inventarios')

@section('contenido')
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Stock mínimo</th>
				<th scope="col">Stock máximo</th>
         <th scope="col">Precio Total</th>
         <th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($inv as $i)
			<tr>
				<td>{{$i->id}}</td>
				<td>{{$i->stock_min}}</td>
         <td>{{$i->stock_max}}</td>
         <td>{{$i->precioTotal}}</td>
				<td>
					<form action="/Carrito-de-Compras/carrito/public/inventarioTrashed/{{$i->id}}" method="post">
						{{csrf_field()}}

						<button class="btn btn-success btn-sm">Recuperar</button>

					</form>
				</td>
			</tr>
			@empty
				<h2>Aún no ha eliminado inventarios.</h2>
			@endforelse
		</tbody>

    <div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
	</table>
		{{$inv->links()}}
	</div>

@endsection
