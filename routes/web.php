<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArriendosController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\ClientesController;



// Route::get('/', function () {
//     return view('welcome');
// });

//Home
Route::get('/',[HomeController::class,'index'])->name('home.index')->middleware('auth');

//Usuarios
Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::middleware('auth')->group(function () {
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/contrasena', [UsuariosController::class, 'contrasena'])->name('usuarios.contrasena');
    Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::get('/usuarios/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');
    Route::delete('/usuarios/{usuario}', [UsuariosController::class,'destroy'])->name('usuarios.destroy');
    // Route::delete('/vehiculos/{vehiculo}', [VehiculosController::class, 'destroy'])->name('vehiculos.destroy');
});

Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/autenticar',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');

//Arriendos
Route::resource('/arriendos',ArriendosController::class,['only'=>['index','create','store','destroy','show']])->middleware('auth');
// Route::get('/arriendos', [ArriendosController::class, 'index'])->name('arriendos.index');
// // Route::get('/arriendos/create', [ArriendosController::class, 'create'])->name('arriendos.create');
// Route::post('/arriendos', [ArriendosController::class, 'store'])->name('arriendos.store');
// Route::get('/arriendos/{arriendo}', [ArriendosController::class, 'show'])->name('arriendos.show');
// Route::delete('/arriendos/{arriendo}',[ ArriendosController::class,'destroy'])->name('arriendos.destroy');

//Clientes
Route::resource('/clientes',ClientesController::class,['only'=>['index','create','store','destroy']])->middleware('auth');

//Perfiles
Route::resource('/perfiles',PerfilesController::class,['only'=>['index','create']])->middleware('auth');

//Vehiculos
Route::resource('/vehiculos',VehiculosController::class,['only'=>['index','create','store','destroy']])->middleware('auth');
// Route::post('/vehiculos', [VehiculosController::class, 'store'])->name('vehiculos.store');


//Tipos
Route::resource('/tipos',TiposController::class,['only'=>['index','create','store','destroy']])->middleware('auth');
// Route::post('/tipos', [TiposController::class, 'store'])->name('tipos.store');
// Route::delete('/tipos/{tipo}', [TiposController::class, 'destroy'])->name('tipos.destroy');

//Arriendos_vehiculos
//Route::resource('/arriendos_vehiculos',ArriendosVehiculosController::class);