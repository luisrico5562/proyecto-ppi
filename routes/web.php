<?php

use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ClienteController;
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

// Route::get('/vista_artista_index', function ()
// {
//     return view('vista_artista_index');
// });

Route::resource('disco', DiscoController::class);
Route::resource('artista', ArtistaController::class);
Route::resource('factura', FacturaController::class);
Route::resource('cliente', ClienteController::class);

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
