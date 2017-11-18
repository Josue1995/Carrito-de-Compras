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

Route::get('/rol_choose', function(){
	return view('rol.elegir');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta CRUD para empresa
Route::resource('/empresa', 'EmpresaController');
Route::get('/empresaTrashed', 'EmpresaController@trash');

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

//Ruta para el controlador de la clase Cliente

Route::resource('/cliente', 'ClienteController');
Route::get('/clienteTrashed', 'ClienteController@trash');
Route::get('/clienteTrashed/{id}', 'ClienteController@restore');

//Rutas para el articulo
Route::resource('/articulo', 'ArticuloController');

//Rutas para el catalogo
Route::resource('/catalogo', 'CatalogoController');