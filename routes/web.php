<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
    return "<h1>Hola Mundo</h1>";
});

Route::get('productos', [ProductoController::class, 'index']);

Route::get('productos/create', [ProductoController::class, 'create']);

Route::get('productos/{producto}', [ProductoController::class, 'show']);

Route::post('productos', [ProductoController::class, 'store']);

Route::get('productos/{id}/edit', [ProductoController::class, 'edit']);

Route::put('productos/{id}', [ProductoController::class, 'update']);

Route::delete('productos/{id}', [ProductoController::class, 'destroy']);

Route::get('usuario', [UsuarioController::class, 'index']);

Route::resource('clientes', ClienteController::class);
