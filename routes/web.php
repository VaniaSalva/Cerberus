<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\FaltasController;
use App\Http\Controllers\CisecController;
use App\Http\Controllers\MoralController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdiestramientoController;
use App\Http\Controllers\LocController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\NominasController;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('Crud.Dashboard');
    })->name('dash');
});
//Mesa de personal
Route::resource('Personal', PersonalController::class)->middleware('auth');
Route::resource('Faltas', FaltasController::class)->middleware('auth');
Route::resource('Cisec', CisecController::class)->middleware('auth');
Route::resource('Moral', MoralController::class)->middleware('auth');
Route::resource('Registro', RegistroController::class)->middleware('auth');
Route::resource('Adiestramiento', AdiestramientoController::class)->middleware('auth');
Route::resource('Loc', LocController::class)->middleware('auth');
Route::resource('Archivo', ArchivoController::class)->middleware('auth');
Route::resource('Nominas', NominasController::class)->middleware('auth');
