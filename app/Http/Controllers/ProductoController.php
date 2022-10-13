<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::orderBY('id', 'desc')->paginate();
        return view('productos.index', compact('productos'));
    }
    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){
        $producto = new Producto();

        $producto->producto = $request->producto;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->marca = $request->marca;

        $producto->save();
        return redirect()->route('productos.show', $producto);
    }

    public function show(Producto $producto){
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto){
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        $producto->producto = $request->producto;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->marca = $request->marca;

        $producto->save();
        return redirect()->route('productos.show', $producto);
    }

}
