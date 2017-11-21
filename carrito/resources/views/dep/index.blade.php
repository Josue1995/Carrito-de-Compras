@extends('layouts.master_crud')

@section('titulo1', 'Deptos.')

@section('titulo2', 'departamentos')

@section('contenido')
	<table class="table table-responsive">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nombre de departamento</th>
					@if(Auth::user()->rol == 'Empresa')
					<th scope="col">Agregar a depto.</th>

					@elseif(Auth::user()->rol == 'Admin')
					<th scope="col">Acciones</th>
					@else
					No puede ejecutar acciones
					@endif
			</tr>
		</thead>
		<tbody>
			@forelse($dep as $d)
			<tr>
				<td>{{$d->nombre_departamento}}</td>
				@if(Auth::user()->rol=='Empresa')
				<td>
					<form action="/Carrito-de-Compras/carrito/public/inventarioMostrar/{{$artId}}/dep/{{$d->id}}" method="post">
						{{csrf_field()}}
						{{ method_field('PUT') }}
						
						<button class="btn btn-success btn-sm" type="submit">Agregar el articulo.</button>
					</form>
					
				</td>
				@endif
			</tr>
			@empty
			<h1>No hay deptos.</h1>
			@endforelse
		</tbody>		
		

	</table>
@endsection