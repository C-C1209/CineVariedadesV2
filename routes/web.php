<?php

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

//Pagina controlAdmin
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
   
    // Ruta para Inicio
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class,'index']);

    // Ruta para Peliculas
    Route::get('/peliculas', [App\Http\Controllers\Admin\PeliculasController::class,'index']);
    Route::POST('/peliculas/edit', [App\Http\Controllers\Admin\PeliculasController::class,'edit']);
    Route::POST('/peliculas/eliminar', [App\Http\Controllers\Admin\PeliculasController::class,'del']);
    Route::POST('/peliculas/agregar', [App\Http\Controllers\Admin\PeliculasController::class,'add']);


    // Ruta para los usuarios
    Route::get('/usuarios', [App\Http\Controllers\Admin\UsuariosController::class,'index']);

});

    Route::get('/', [App\Http\Controllers\Cliente\ClienteController::class,'index']);
    Route::get('/login', function () { return view('login'); });






// Route::get('/controlAdmin', function () { return view('/controlAdmin/controlPanel'); });

// //Ruta Peliculas del control Admin
// Route::get('/controlAdmin/peliculas', function () { return view('/controlAdmin/peliculas'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

