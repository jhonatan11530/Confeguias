<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
Route::get('/', 'RegistroController@create');
Route::post('Registro', 'RegistroController@store');
Route::post('Registro/filtrar', 'RegistroController@filtrar');


session_start();
/*----- CAMBIAR IDIOMA LARAVEL -----*/
if (empty($_SESSION['language'])) {
    $_SESSION['language'] = "es";
    App::setLocale('es');
} else {
    App::setLocale($_SESSION['language']);
}
Route::get('/change-lang/{lang}', function ($lang) {
    $_SESSION['language'] = $lang;
    App::setLocale($lang);
});
