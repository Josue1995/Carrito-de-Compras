@extends('layouts.master_crud')

@section('titulo1', 'Inventario')

@section('titulo2', 'inventarios, editar')

@section('contenido')
  <form action="/Carrito-de-Compras/carrito/public/inventario/{{ $inv->id }}" method="post">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    <div class="form-group">
      <label for="stock_min">Stock mínimo</label>
      <input type="number" name="stock_min" class="form-control" id="stock_min" aria-describedby="inventarioHelp" value="{{$inv->stock_min}}" required>
      <small id="inventarioHelp" class="form-text text-muted">Es importante ingresar el stock mínimo.</small>
    </div>
    <div class="form-group">
      <label for="stock_max">Stock máximo</label>
      <input type="number" name="stock_max" class="form-control" id="stock_max" aria-describedby="inventarioHelp" value="{{$inv->stock_max}}"  required>
      <small id="inventarioHelp" class="form-text text-muted">Es importante ingresar el stock mínimo.</small>
    </div>
    <div class="form-group">
      <label for="precioTotal">Precio total</label>
      <input type="number" step="0.01" name="precioTotal" class="form-control" id="precioTotal" aria-describedby="inventarioHelp" value="{{$inv->precioTotal}}"  required>
      <small id="inventarioHelp" class="form-text text-muted">Tiene que ingresar el precio total.</small>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
