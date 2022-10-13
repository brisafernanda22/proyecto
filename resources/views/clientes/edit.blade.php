@extends('layouts.plantilla')

@section('title', 'clientes edit')

@section('content')
<style>
    body{
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV8e34ALYGhUpeV8P0rfoPzBc5ixVVFDGbuXhxCTk7u72Xw4v97lieK7ZHuDXByMZtRS4&usqp=CAU");
    }
</style>
<center>
    <br>
<h1>Editar Cliente</h1><br><br>
<form action="{{route('clientes.update',$cliente)}}" method="POST" >

    @csrf
    @method('put')

    <div class="form-group">
        <label>Nombre</label><br>
        <input type="text" name="nombre" value="{{old('nombre', $cliente->nombre)}}">
    </div>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <div class="form-group">
    <label for="">Edad</label><br>
        <input type="number" name="edad" value="{{old('edad', $cliente->edad)}}">
    </div>
    @error('edad')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <div class="form-group">
        <label for="">CP</label><br>
            <input type="number" name="cp" value="{{old('cp', $cliente->cp)}}">
        </div>
        @error('cp')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
    <div class="form-group">
    <label>Sexo</label><br>
        <input type="text" name="sexo" value="{{old('sexo', $cliente->sexo)}}">
    </div>
    @error('sexo')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit" class="btn btn-primary">Acualizar</button>
</form>
</center>
@endsection
