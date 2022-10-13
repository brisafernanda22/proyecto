@extends('layouts.plantilla')

@section('title', 'productos create')

@section('content')
<h1>en esta pagina podras agregar un producto</h1>
<form action="{{route('productos.store')}}" method="POST">

    @csrf
    

    <label>
        Producto:
        <br>
        <input type="text" name="producto">
    </label>
    <br>
    <label>
        Cantidad:
        <br>
        <input type="text" name="cantidad">
    </label>
    <br>
    <label>
        Precio:
        <br>
        <input type="text" name="precio">
    </label>
    <br>
    <label>
        Marca:
        <br>
        <input type="text" name="marca">
    </label>
    <br>
    <button type="submit">Enviar formulario</button>
</form>
@endsection

