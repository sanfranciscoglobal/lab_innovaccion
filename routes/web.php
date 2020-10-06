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
<<<<<<< HEAD

// Users
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/signin', 'Auth\RegisterController@create')->name('signin');
=======
Route::get('/fondos', 'Aplicacion\FondosController@verFormulariofondos')->name('fondos');
Route::get('/acerca-de', function () {
    return view('aplicacion.acerca.acerca');
})->name('acercade');
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
>>>>>>> 536aad21a1c4b799c7abe97529844137390439c5

// Aplicacion
Route::as('app.')
    ->prefix('app')
    ->group(
        function () {
            Route::get('contacto', 'Aplicacion\HomeController@contacto')->name('contacto');
            Route::post('contacto/store', 'Aplicacion\HomeController@store')->name('contacto.store');
<<<<<<< HEAD

            // Fondos
            Route::get('fondos', 'Aplicacion\FondosController@showForm')->name('fondos');
            Route::get('fondos/{id}/{slug}', 'Aplicacion\FondosController@edit')->name('fondos.edit');
            Route::post('fondos', 'Aplicacion\crudFondos@store')->name('fondos.post');
            Route::put('fondos/{fondo}', 'Aplicacion\crudFondos@update')->name('fondos.put');
            Route::delete('fondos/{fondo}', 'Aplicacion\crudFondos@destroy')->name('fondos.delete');

            Route::get('/datos-del-usuario',        'Aplicacion\RegistroController@verFormularioregistro')->name('registro');
            Route::get('/registro-de-fondos',       'Aplicacion\FondosController@verFormulariofondos')->name('registrofondos');

            //Eventos
            Route::get('/eventos', 'Aplicacion\EventosController@showForm')->name('eventos');
            Route::get('/eventos/{id}/{slug}', 'Aplicacion\EventosController@edit')->name('eventos.edit');
            Route::post('/eventos', 'Aplicacion\crudEventos@store')->name('eventos.post');
            Route::put('/eventos/{evento}', 'Aplicacion\crudEventos@update')->name('eventos.put');
            Route::delete('/eventos/{evento}', 'Aplicacion\crudEventos@destroy')->name('eventos.delete');

            Route::get('/registro-de-eventos', 'Aplicacion\EventosController@verFormularioeventos')->name('registroeventos');


=======
            Route::get('/datos-del-usuario',                        'Aplicacion\RegistroController@verFormularioregistro')->name('registro');
            Route::get('/registro-de-fondos',                       'Aplicacion\FondosController@verFormulariofondos')->name('registrofondos');
            Route::get('/registro-de-eventos',                      'Aplicacion\EventosController@verFormularioeventos')->name('registroeventos');
            Route::get('/registro-de-iniciativas',                  'Aplicacion\IniciativasController@verFormularioiniciativas')->name('registroiniciativas');
            Route::get('/registro-de-material-de-aprendizaje',      'Aplicacion\MaterialdeaprendizajeController@verFormularioregistromaterial')->name('registromaterial');
>>>>>>> 536aad21a1c4b799c7abe97529844137390439c5
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
