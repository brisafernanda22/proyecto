<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreCliente;
use GuzzleHttp\Client;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::orderBY('id', 'desc')->paginate();
        return view('clientes.index', compact('clientes'));
    }
    public function create(){
        return view('clientes.create');
    }

    public function store(StoreCliente $request){

        /*$cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->cp = $request->cp;
        $cliente->sexo = $request->sexo;

        $cliente->save();*/
        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.show', $cliente);
    }

    public function show(Cliente $cliente){
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente){

        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'cp' => 'required',
            'sexo'=> 'required',
        ]);
        
        /*$cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->cp = $request->cp;
        $cliente->sexo = $request->sexo;

        $cliente->save();*/
        $cliente->update($request->all());
        return redirect()->route('clientes.show', $cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
