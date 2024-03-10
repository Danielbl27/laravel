<?php

use App\Http\Controllers\RecetasController;
use App\Http\Controllers\UsuarioController;
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

// Route::get('/', 'UsuarioController@index');
// Route::get('/dashboard','DashboardController@index');
// Route::get('/test',function(){

//     return 'Funcionaaaa';
// });

Route::resource('recetas', RecetasController::class);
Route::resource('usuarios', UsuarioController::class);

Route::get('/', RecetasController::class . '@index')->name('index');

Route::get('/usuarios', UsuarioController::class . '@index')->name('usuarioIndex');

//Route::get('/usuarios/create', UsuarioController::class . '@create')->name('usuarioCreate');
//Route::get('/usuarios/store', UsuarioController::class . '@store')->name('usuarioStore');




