<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminAuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('layouts.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', AdminAuthMiddleware::class])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::get('/products', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
//Ruta para actualizar recursos de la tabla productos
Route::get('/products/{id}', [ProductController::class, 'edit'])->name('product.edit');
//Ruta para procesar el actualizado del recurso
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/{id}/delete', [UserController::class, 'destroy'])->name('cerrar-sesion');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

require __DIR__.'/auth.php';
