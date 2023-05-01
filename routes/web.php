<?php

use App\Http\Controllers\ProfileController;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\CategoriaController;
use app\Http\Controllers\TamanioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/todosProductos', [ProductController::class, 'index'])->name('product.index');
Route::get('/nuevoProducto', [ProductController::class, 'create'])->name('product.create');
Route::get('/crearNuevoProducto', [ProductController::class, 'store'])->name('product.store');
Route::get('/verProducto', [ProductController::class, 'show'])->name('product.show');

Route::get('/todasCategorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/crearNuevaCategoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/todosTamaños', [TamanioController::class, 'index'])->name('tamaño.index');
Route::get('/crearNuevoTamaño', [TamanioController::class, 'store'])->name('tamaño.store');

require __DIR__.'/auth.php';
