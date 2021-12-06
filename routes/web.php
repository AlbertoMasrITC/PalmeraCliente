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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'PedidoController@iniciaPedido')->name('home');
Route::get('/home/{datil}{opcion}', 'PedidoController@seleccionarProducto')->name('home.datil');
Route::post('/home', 'PedidoController@agregarProducto')->name('home.agregarDatil');