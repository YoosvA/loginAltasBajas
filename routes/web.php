<?php

use App\Http\Controllers\Altasbajas;
use App\Http\Controllers\AltasyBajas;
use App\Http\Controllers\AuthController;
use App\Models\Altabaja;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('logear', [AuthController::class,'logear'])->name('logear');
Route::get('/usuarioNuevo', [AuthController::class, 'agregarNuevo']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/agregarUsuario', [AuthController::class, 'createUser']);
Route::post('/agregarNuevo', [AuthController::class, 'agregarNuevo']);

// Route::get('/inicio', [Clientes::class, 'index'])->name('inicio');


Route::get('/inicio', [Altasbajas::class, 'index'])->name('inicio');
Route::get('/altasbajas', [Altasbajas::class, 'altasbajas']);
Route::get('/create', [Altasbajas::class, 'create']);
Route::post('/store', [Altasbajas::class, 'store']);
Route::get('/edit/{id}', [Altasbajas::class, 'edit'])->name('edit');
Route::put('update/{id}', [Altasbajas::class, 'update'])->name('update');
Route::get('/show/{id}', [Altasbajas::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Altasbajas::class, 'destroy'])->name('destroy');