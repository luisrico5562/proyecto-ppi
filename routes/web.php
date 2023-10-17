<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DiscoController;
use App\Http\Controllers\FacturaController;
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
    return view('inicio');
});

Route::get('/users-profile', function ()
{
    return view('users-profile');
});

Route::resource('Disco', DiscoController::class);
Route::resource('Factura', FacturaController::class);
Route::resource('Cliente', ClienteController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/users-profile', function () {
        return view('users-profile');
    })->name('users-profile');
});
