<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DetallePedidoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\TamañoController;
use App\Http\Controllers\Api\ClienteController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos',[ProductoController::class, 'index'])->name('producto.index');
Route::get('/productos/{id}/show', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/pedidos/{id_cliente}/index_id', [PedidoController::class, 'index_id'])->name('pedido.index_id');
Route::get('/pedidos/detallepedido/{id_pedido}/show', [DetallePedidoController::class, 'show'])->name('DetallePedido.show');

//Route::get('/pedidos/{id_cliente}/index', [PedidoController::class, 'cancelar'])->name('pedido.cancelar');
Route::get('/categorias',[CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/tamaños',[TamañoController::class, 'index'])->name('tamaño.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.store');