@extends('layouts.master_crud')

@section('titulo1', 'Empresa')

@section('titulo2', 'Empresas')

@section('contenido')
  @parent
<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">id_inventario</th>
				<th scope="col">Rol</th>
         		<th scope="col">Usuario</th>
         		<th scope="col">Nombre empresa</th>
         		<th scope="col">Telefono</th>
         		<th scope="col">Direccion empresa</th>
         		<th scope="col">Correo Electronico</th>
         		
			</tr>

		</thead>
		<tbody>
			@forelse($trashedEmpresas as $e)
			<tr>
				<td>{{$e->id}}</td>
				<td>{{$e->id_inventario}}</td>
         		<td>{{$e->users_id}}</td>
         		<td>{{$e->roles_id}}</td>
         		<td>{{$e->nombre_empresa}}
         		<td>{{$e->telefono}}</td>
         		<td>{{$e->direccion_empresa}}</td>
         		<td>{{$e->correo_electronico}}</td>
				
			</tr>
			@empty
       <div class="row">
				<h2>Aún no ha eliminado empresas.</h2>
        </div>
			@endforelse
		</tbody>

	</table>
	<div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
		{{$trashedEmpresas->links()}}
	</div>

@endsection


