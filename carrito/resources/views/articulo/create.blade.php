@extends('layouts.master_crud')

@section('titulo1','Articulo')

@section('titulo2','Articulos')

@section('contenido')
	<form action="/Carrito-de-Compras/carrito/public/articulo" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label></label>
      <label for="titulo_articulo">Titulo</label>
      <input type="text" name="titulo_articulo" class="form-control" id="titulo_articulo" aria-describedby="tituloHelp" placeholder="Ingrese el titulo" required>
      <small id="tituloHelp" class="form-text text-muted">Registrar titulo.</small>
    </div>
    <div class="form-group">
      <label for="precio">Precio </label>
      <input type="number" step="any" name="precio" class="form-control" id="precio" aria-describedby="precioHelp" placeholder="Ingrese el precio" required>
      <small id="precioHelp" class="form-text text-muted">Registrar precio.</small>
    </div>
    <div class="form-group">
    	<label for="descuento">Descuento</label>
    	<input type="number" step="any" name="descuento" class="form-control" id="descuento" placeholder="Dirección del cliente" aria-describedby="descuentoHelp" required>
      <small id="descuentoHelp">Si no hay descuento, ingrese cero</small>
    </div>
    <div class="form-group">
      <label for="existencias">Existencias</label>
    	<input type="number" name="existencias" id="existencias" class="form-control" placeholder="País del cliente" aria-describedby="existenciasHelp" required>
      <small id="existenciasHelp">Si no hay existencias, ingrese cero</small>
    </div>
    <div class="form-group">
      <label for="imagen_articulo">Seleccion una imagen</label>
    	<input type="file" name="imagen_articulo" id="imagen_articulo" class="form-control" required>
    </div>
    <div class="form-group">
            <label for="detallearticulo_id">Detalle articulo</label><br>
            <select class="textWidth form-control" name="detallearticulo_id" id="detallearticulo_id" type="text">
                <option disabled selected> -- Seleccione una opción -- </option>
                @foreach($detalle as $detail)
                  <option value="{{$detail->id}}">
                    {{$detail->nombre_articulo}}
                  </option>
                @endforeach
            </select>
      </div>
      
      <div class="form-group">
        <label for="departamento_id">Departamento</label>
        <select class="textWidth form-control" name="departamento_id" id="departamento_id" type="text">
          <option disabled selected> --Seleccione el departamento--</option>
          @foreach($deptos as $d)
            <option value="{{$d->id}}">
              {{$d->nombre_departamento}}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
            <label for="catalogo_id">Su catalogo</label><br>
            <select class="textWidth form-control" name="catalogo_id" id="catalogo_id" type="text">
                <option disabled selected> -- Seleccione una opción -- </option>
                <option value="{{Auth::user()->empresa->catalogo->id}}">
                    {{Auth::user()->empresa->catalogo->id}}
                </option>
                
            </select>
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  

@endsection
