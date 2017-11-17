@extends('layouts.master_crud')

@section('titulo1', 'Cliente')

@section('titulo2', 'Clientes')

@section('contenido')
  @parent
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Nombres</th>
				<th scope="col">Apellidos</th>
        <th scope="col">Dirección</th>
         <th scope="col">País</th>
         <th scope="col">Ciudad</th>
         <th scope="col">Usuario</th>
         
         <th scope="col">Acciones</th>
			</tr>

		</thead>
		<tbody>
			@forelse($clie as $c)
			<tr>
				<td>{{$c->id}}</td>
				<td>{{$c->nombres}}</td>
        <td>{{$c->apellidos}}</td>
        <td>{{$c->direccion}}</td>
        <td>{{$c->pais}}</td>
        <td>{{$c->ciudad}}</td>
        <td>{{$c->users_id}}</td>
        
        <td>
					<form action="/Carrito-de-Compras/carrito/public/clienteTrashed/{{$c->id}}" method="post">
						{{csrf_field()}}

						<button class="btn btn-success btn-sm">Recuperar</button>

					</form>
				</td>
			</tr>
			@empty
				<h2>Aún no ha eliminado clientes.</h2>
			@endforelse

		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$clie->links()}}
	</div>

@endsection
