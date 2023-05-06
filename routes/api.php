<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DetallePedidoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\CategoriaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/productos',[ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');

Route::get('/detallepedido', [DetallePedidoController::class, 'index'])->name('detallePedido.index');
Route::get('/detallepedido/{id}', [DetallePedidoController::class, 'show'])->name('detallePedido.show');

Route::get('/pedido/{id_cliente}', [PedidoController::class, 'index'])->name('pedido.index');
Route::get('/pedido/{id}', [PedidoController::class, 'show'])->name('pedido.cancelar');

Route::get('/categorias',[CategoriaController::class, 'index'])->name('categoria.index');

