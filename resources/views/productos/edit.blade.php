@extends('layouts.plantilla')

@section('title', 'productos edit')

@section('content')
<h1>en esta pagina podras editar un producto</h1>
<form action="{{route('productos.update',$producto)}}" method="POST">

    @csrf
    @method('put')
    <label>
        Producto:
        <br>
        <input type="text" name="producto" value="{{$producto->producto}}">
    </label>
    <br>
    <label>
        Cantidad:
        <br>
        <input type="text" name="cantidad" value="{{$producto->cantidad}}">
    </label>
    <br>
    <label>
        Precio:
        <br>
        <input type="text" name="precio" value="{{$producto->precio}}">
    </label>
    <br>
    <label>
        Marca:
        <br>
        <input type="text" name="marca" value="{{$producto->marca}}">
    </label>
    <br>
    <button type="submit">Acualizar formulario</button>
</form>
@endsection
