@extends('layouts.plantilla')

@section('title', 'productos')

@section('content')
    <h1>Bienvenido a la pagina principal de productos</h1>
    <a href="{{route('productos.create')}}">Agregar</a>
    <ul>
        @foreach ($productos as $producto)
            <li>
                <a href="{{route('productos.show', $producto->id)}}">{{$producto->producto}}</a>
                
            </li>
        @endforeach
    </ul>
    {{$productos->links()}}
@endsection

