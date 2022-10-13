@extends('layouts.plantilla')

@section('title', 'clientes')

@section('content')
    <style>
        body{
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV8e34ALYGhUpeV8P0rfoPzBc5ixVVFDGbuXhxCTk7u72Xw4v97lieK7ZHuDXByMZtRS4&usqp=CAU");
        }
        table{
            border: 10px;
           /* height: 300px;
            width: 300px;*/
            align-content: center;
        }
    </style>
    <center>
    <h1>Lista de los Clientes</h1>
    <br>
    <a href="{{route('clientes.create')}}" class="btn btn-primary">Agregar</a>
    <br><br>
    
        
        <div class="container">
            <div class="col-md-3" >
                <div class="table-responsive"></div>
            <table class="table table-bordered">
                <tr class="table-success">
                    <td>
                        Nombre
                    </td>
                    <td>
                        Edad
                    </td>
                    <td>
                        CP
                    </td>
                    <td>
                        Sexo
                    </td>
                </tr>
                
                <tr class="table-success">
                    @foreach ($clientes as $cliente)
                    <td class="table table-success"><a href="{{route('clientes.show', $cliente->id)}}">{{$cliente->nombre}}</a></td>
                    <td class="table table-success">{{$cliente->edad}}</td>
                    <td class="table table-success">{{$cliente->cp}}</td>
                    <td class="table table-success">{{$cliente->sexo}}</td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
        
    </center>
    {{$clientes->links()}}
@endsection

