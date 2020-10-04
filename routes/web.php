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

// Corporativas
Route::get('/', function () {
    return view('aplicacion.home.home');
})->name('app.home');
Route::get('/fondos', 'Aplicacion\FondosController@verFormulariofondos')->name('fondos');
Route::get('/acerca-de', function () {
    return view('aplicacion.acerca.acerca');
})->name('fondos');

// Aplicacion
Route::as('app.')
    ->prefix('app')
    ->group(
        function () {
            Route::get('contacto', 'Aplicacion\HomeController@contacto')->name('contacto');
            Route::post('contacto/store', 'Aplicacion\HomeController@store')->name('contacto.store');
            Route::get('/datos-del-usuario',        'Aplicacion\RegistroController@verFormularioregistro')->name('registro');
            Route::get('/registro-de-fondos',       'Aplicacion\FondosController@verFormulariofondos')->name('registrofondos');
            Route::get('/registro-de-eventos',      'Aplicacion\EventosController@verFormularioeventos')->name('registroeventos');
            Route::get('/registro-de-iniciativas',      'Aplicacion\IniciativasController@verFormularioiniciativas')->name('registroiniciativas');
        }
    );

//// Adminitrator
//Route::get('/admin', 'HomeController@index')
//    ->name('admin.home');
//
//Route::as('admin.')
//    ->prefix('admin')
//    ->group(
//        function () {
//            // Route::resource('abreviatura', 'AbreviaturaController');
//        }
//    );
//
//// Autenticate
//Auth::routes();
//Route::as('auth.')
//    ->prefix('auth')
//    ->group(
//        function () {
//            // Route::get('entrar', 'Aplicacion\AuthController@entrar')->name('entrar');
//            // Route::get('register', 'Aplicacion\AuthController@create')->name('register');
//            // Route::post('store', 'Aplicacion\AuthController@store')->name('store');
//            // Route::post('logout', 'Aplicacion\AuthController@logout')->name('logout');
//        }
//    );
