@extends('layouts.plantilla')

@section('title', 'productos'.$producto->producto)

@section('content')
<h1>Producto: {{$producto->producto}} </h1>
<a href="{{route('productos.index')}}">Regresar</a>
<br>
<a href="{{route('productos.edit',$producto)}}">Editar</a>
<p><strong>Cantidad: </strong>{{$producto->cantidad}}</p>
<p><strong>Precio: </strong>{{$producto->precio}}</p>
<p><strong>Marca: </strong>{{$producto->marca}}</p>
@endsection
