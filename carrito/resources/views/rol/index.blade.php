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
			</tr>
			
		</thead>
		<tbody>
			@forelse($roles as $rol)
			<tr>
				<td>{{$rol->id}}</td>
				<td>{{$rol->nombre_rol}}</td>
			</tr>
			@empty
				<h2>Aún no ha creado articulos.</h2>
			@endforelse	
		</tbody>
		
	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$roles->links()}}
	</div>

@endsection