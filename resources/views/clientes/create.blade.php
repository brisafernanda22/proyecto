@extends('layouts.plantilla')

@section('title', 'clientes create')

@section('content')

<style>
    body{
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV8e34ALYGhUpeV8P0rfoPzBc5ixVVFDGbuXhxCTk7u72Xw4v97lieK7ZHuDXByMZtRS4&usqp=CAU");
    }
</style>
<center>
<br>
<h1>Agregar Cliente</h1><br><br>
<form action="{{route('clientes.store')}}" method="POST">

    @csrf
    
    
    <label>
        Nombre
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Edad
        <br>
        <input type="number" name="edad" value="{{old('edad')}}">
    </label>
    @error('edad')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        CP
        <br>
        <input type="number" name="cp" value="{{old('cp')}}">
    </label>
    @error('cp')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Sexo
        <br>
        <input type="text" name="sexo" value="{{old('sexo')}}">
    </label>
    @error('sexo')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

</center>
@endsection

