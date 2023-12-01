<?php

use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\DiscoController;
use App\Http\Controllers\FacturaController;
use App\Models\Disco;
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
    $discos = Disco::all();
    return view('inicio', compact('discos'));
});

Route::get('/users-profile', function ()
{
    return view('users-profile');
});

#Route::get('/mi-carrito', [CarritoController::class, 'crearCarrito'])->name('mi-carrito');

Route::post('/add-cart/{disco}', [CarritoController::class, 'agregarDiscoAlCarrito'])->name('add-cart');

Route::get('disco-descarga/{disco}', [DiscoController::class, 'descargar'])->name('disco.descarga');

Route::delete('/carrito/{disco}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

Route::resource('disco', DiscoController::class);
Route::resource('artista', ArtistaController::class);
Route::resource('factura', FacturaController::class);
Route::resource('carrito', CarritoController::class);

Route::get('/logout', function ()
{
    $discos = Disco::all();
    auth()->logout();
    Session()->flush();

    return view('inicio', compact('discos'));
})->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');
});








Route::resource('Cliente', ClienteController::class);

Route::resource('Artista', ArtistaController::class);

Route::resource('Factura', FacturaController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
