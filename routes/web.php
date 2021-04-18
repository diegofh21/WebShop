<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

// VISTA DE PERFIL DE CLIENTE
Route::get('/perfil', [ProfileController::class, 'perfil'])->name('perfil');

// VISTAS GENERALES DE CLIENTE
Route::get('/tienda', [PageController::class, 'shop'])->name('shop');

Route::get('/sobre-nosotros', [PageController::class, 'about'])->name('about');

Route::get('/contacto', [PageController::class, 'contact'])->name('contacto');

Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');

Route::get('/carrito', [PageController::class, 'carrito'])->name('carrito');

// Esta ruta deberia ser /producto/{id}
Route::get('producto', [PageController::class, 'producto'])->name('producto');

Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');