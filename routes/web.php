<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TamanioController;
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

Route::get('/todosproductos', [ProductController::class, 'index'])->name('ProductView.products');
Route::get('/nuevoproducto', [ProductController::class, 'create'])->name('product.create');
Route::post('/crearnuevoproducto', [ProductController::class, 'store'])->name('product.store');
Route::get('/verproducto', [ProductController::class, 'show'])->name('product.show');

Route::get('/todascategorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::post('/crearnuevacategoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/todostamaños', [TamanioController::class, 'index'])->name('tamaño.index');
Route::post('/crearnuevotamaño', [TamanioController::class, 'store'])->name('tamaño.store');

require __DIR__.'/auth.php';
