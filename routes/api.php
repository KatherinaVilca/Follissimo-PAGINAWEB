<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\TamañoController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\CompraController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos',[ProductoController::class, 'index'])->name('producto.index');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/productos/tamaño/{tipo_tamaño}', [ProductoController::class, 'productosPorTamaño'])->name('producto.productosPorTamaño');
Route::get('/productos/categoria/{tipo_categoria}', [ProductoController::class, 'productosPorCategoria'])->name('producto.productosPorCategoria');
Route::get('/pedidos/{email}', [PedidoController::class, 'index_email'])->name('pedido.index_email');
Route::get('/pedidos/{id_pedido}/detalle', [DetallePedidoController::class, 'show'])->name('DetallePedido.show');
Route::post('/compra', [CompraController::class, 'store'])->name('compra.store');

Route::put('/pedidos/cancelar', [PedidoController::class, 'cancelar'])->name('pedido.cancelar');
Route::get('/categorias',[CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/tamaños',[TamañoController::class, 'index'])->name('tamaño.index');
