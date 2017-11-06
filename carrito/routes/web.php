<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta para controlador de la clase ROL

Route::resource('/rol', 'RolController');
// Ruta para listar objertos borrados
Route::get('/rolTrashed', 'RolController@trash');

//recupara objetos borrados
Route::get('/rolTrashed/{id}', 'RolController@restore');

//Ruta CRUD para empresa
Route::resource('/empresa', 'EmpresaController');

//Ruta CRUD para usuarios
Route::resource('/usuario', 'UserController');
Route::get('/usuarioTrashed', 'UserController@trash');
Route::get('/rolTrashed/{id}', 'RolController@restore');

//Ruta para controlador de la clase DetalleArtículo

Route::resource('/detalle', 'DetalleArticuloController');
Route::get('/detalleTrashed', 'DetalleArticuloController@trash');
Route::get('/detalleTrashed/{id}', 'DetalleArticuloController@restore');

//Ruta para controlador de la clase Inventario

Route::resource('/inventario', 'InventarioController');
Route::get('/inventarioTrashed', 'InventarioController@trash');
Route::get('/inventarioTrashed/{id}', 'InventarioController@restore');
