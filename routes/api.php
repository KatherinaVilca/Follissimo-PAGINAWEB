<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DetallePedidoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\TamañoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos',[ProductoController::class, 'index'])->name('producto.index');
Route::get('/productos/{id}/show', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/pedidos/{id}/index', [DetallePedidoController::class, 'index'])->name('detallePedido.index');
Route::get('/detallepedido/{id}/show', [DetallePedidoController::class, 'show'])->name('detallePedido.show');

Route::get('/pedidos/{id_cliente}/index_id', [PedidoController::class, 'index_id'])->name('pedido.index_id');

//Route::get('/pedidos/{id_cliente}/index', [PedidoController::class, 'cancelar'])->name('pedido.cancelar');
Route::get('/categorias',[CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/tamaños',[TamañoController::class, 'index'])->name('tamaño.index');

