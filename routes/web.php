<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Database\Schema\IndexDefinition;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');

Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{cliente}',[ClienteController::class, 'destroy'])->name('clientes.destroy');
