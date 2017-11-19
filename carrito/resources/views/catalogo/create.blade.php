@extends('layouts.master_crud')

@section('titulo1', 'catalogo')

@section('titulo2', 'Su catalogo')

@section('contenido')
	<div class="card" style="width: 20rem;">
  		<div class="card-body">
    		<h4 class="card-title">Lamentamos el inconveniente</h4>
    		<h6 class="card-subtitle mb-2 text-muted">Le suplicamos de click en el boton</h6>
    		<p class="card-text">Con el creara su catalogo para almacenar sus productos</p>
    		<form action="/Carrito-de-Compras/carrito/public/catalogo" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="empresa_id">Empresa</label>
            <select class="textWidth form-control" name="empresa_id" id="empresa_id" type="text">
                <option value="{{Auth::user()->empresa->id}}">{{Auth::user()->empresa->nombre_empresa}}</option>
            </select>
        </div>
    			<button type="submit" class="card-link btn">Crear</button>
    		</form>
    			
  		</div>
	</div>
@endsection
