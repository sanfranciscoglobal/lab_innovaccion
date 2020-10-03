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

// Users
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/signin', 'Auth\RegisterController@create')->name('signin');

// Aplicacion
Route::as('app.')
    ->prefix('app')
    ->group(
        function () {
            Route::get('contacto', 'Aplicacion\HomeController@contacto')->name('contacto');
            Route::post('contacto/store', 'Aplicacion\HomeController@store')->name('contacto.store');

            // Fondos
            Route::get('/fondos', 'Aplicacion\FondosController@showForm')->name('fondos');
            Route::get('/fondos/{id}/{slug}', 'Aplicacion\FondosController@edit')->name('fondos.edit');
            Route::post('/fondos', 'Aplicacion\crudFondos@store')->name('fondos.post');
            Route::put('/fondos', 'Aplicacion\crudFondos@store')->name('fondos.put');

            Route::get('/datos-del-usuario',        'Aplicacion\RegistroController@verFormularioregistro')->name('registro');
            Route::get('/registro-de-fondos',       'Aplicacion\FondosController@verFormulariofondos')->name('registrofondos');
            Route::get('/registro-de-eventos',      'Aplicacion\EventosController@verFormularioeventos')->name('eventos');
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
