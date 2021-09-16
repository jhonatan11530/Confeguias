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
/*
Route::get('/','PaginaWebController@PaginaWebIndex');
Route::get('sobre-nosotros','PaginaWebController@PaginaWebNosotros');
Route::get('guias-nacionales','PaginaWebController@PaginaWebGuias');
Route::get('contacto','PaginaWebController@PaginaWebContacto');
Route::get('terminos','PaginaWebController@PaginaWebTerminos');
Route::get('politicas','PaginaWebController@PaginaWebPoliticas');
*/

/* ROUTE REGISTRO */
Route::get('/','RegistroController@create');
Route::post('Registro','RegistroController@store');
