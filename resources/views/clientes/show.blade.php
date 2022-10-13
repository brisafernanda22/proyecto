@extends('layouts.plantilla')

@section('title', 'clientes'.$cliente->cliente)

@section('content')
<style>
    body{
        background-image: url("https://i.pinimg.com/originals/7e/80/ac/7e80ac6e7f99fb1cd6b0970fbdde1c2e.jpg");
    }
    .btn-primary{
        margin-left: 12%

    }
    .titulo{
        margin-left: 2%
    }
</style>

<h1 class="titulo">Datos del cliente: {{$cliente->cliente}} </h1>
<a href="{{route('clientes.index')}}" class="btn btn-primary" >Regresar</a>
<br><br>
<a href="{{route('clientes.edit',$cliente)}}" class="btn btn-primary">Actualizar</a><br><br>
<form action="{{route('clientes.destroy', $cliente)}}"  method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-primary">Eliminar</button><br><br>
</form>
<div class="container">
<div class="row">
<div class="col-md-3" >
<div class="table-responsive">
<table class="table table-bordered" class="table">
    <tr class="table-success">
        <td><strong>Nombre</strong></td>
        <td><strong>Edad</strong></td>
        <td><strong>CP</strong></td>
        <td><strong>Sexo</strong></td>
    </tr>
    <tr>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->edad}}</td>
        <td>{{$cliente->cp}}</td>
        <td>{{$cliente->sexo}}</td>
    </tr>
</table>
</div>
</div>
</div>
</div>
@endsection
