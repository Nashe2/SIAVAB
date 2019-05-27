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

Route::resource('productos', 'ProductosController');
Route::resource('personas', 'PersonasController');
Route::resource('distribuidor', 'DistribuidorController');
Route::resource('materiales', 'MaterialesController');
Route::resource('color', 'ColorController');
Route::resource('artesano', 'ArtesanoController');
Route::resource('creacionmaterial', 'CreacionmaterialController');
Route::resource('compra', 'CompraController');
Route::resource('promocion', 'PromocionController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('ejemplo', 'EjemploController');
Route::resource('venta', 'VentaController');
Route::resource('detallescompra', 'DetallescompraController');
Route::resource('usomaterial', 'UsomaterialController');
Route::resource('carrito', 'CarritoController');
Route::resource('produccion', 'ProduccionController');

Route::get('/home', 'HomeController@index')->name('home');
