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

Route::get('/', 'PaginaWebController@PaginaWebIndex');
Route::get('sobre-nosotros', 'PaginaWebController@PaginaWebNosotros');
Route::get('directorio', 'PaginaWebController@PaginaWebDirectorio');
Route::get('guias-nacionales', 'PaginaWebController@PaginaWebGuias');
Route::get('contacto', 'PaginaWebController@PaginaWebContacto');
Route::get('terminos', 'PaginaWebController@PaginaWebTerminos');
Route::get('politicas', 'PaginaWebController@PaginaWebPoliticas');
Route::get('beneficios', 'PaginaWebController@PaginaWebBeneficios');
Route::get('denuncia', 'PaginaWebController@PaginaWebDenuncia');
Route::post('Enviar/Contacto', 'MailController@MailContacto');
Route::post('Enviar/Denuncia', 'MailController@MailDenuncia');

Route::post('guias-nacionales/Filtro', 'PaginaWebController@FiltroGuias');

Route::get('Registro/Guia', 'RegistroController@create');
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
