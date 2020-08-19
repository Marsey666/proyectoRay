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

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');


//RUTAS NUESTRAS USUARIO-INTEGRANTE-DIRECCION
Route::get('/usuarios/filter','UsuarioController@filter');
Route::resource("usuarios",'UsuarioController');

Route::get('/integrantes/filter','IntegranteController@filter');
Route::resource("integrantes",'IntegranteController');

Route::get('/direccions/filter','DireccionController@filter');
Route::resource("direccions",'DireccionController');

