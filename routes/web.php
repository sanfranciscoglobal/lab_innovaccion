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
Route::get('/material-de-aprendizaje', 'Aplicacion\MaterialdeaprendizajeController@verListadomateriales')->name('material');
Route::get('/material-de-aprendizaje/{cat}/', 'Aplicacion\MaterialdeaprendizajeController@verCategoriasmateriales')->name('material.categoria');
Route::get('/material-de-aprendizaje/{cat}/{post}/', 'Aplicacion\MaterialdeaprendizajeController@verDetallematerial')->name('material.categoria.detalle');
Route::get('/acerca-de', function () {
    return view('aplicacion.acerca.acerca');
})->name('acercade');
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

// Aplicacion
Route::as('app.')
    ->prefix('app')
    ->group(
        function () {
            Route::get('contacto', 'Aplicacion\HomeController@contacto')->name('contacto');
            Route::post('contacto/store', 'Aplicacion\HomeController@store')->name('contacto.store');
            Route::get('/escritorio', 'Aplicacion\EscritorioController@verEscritorio')->name('escritorio');
            Route::get('/datos-del-usuario', 'Aplicacion\RegistroController@verFormularioregistro')->name('registro');
            Route::get('/registro-de-fondos', 'Aplicacion\FondosController@verFormulariofondos')->name('registrofondos');
            Route::get('/registro-de-eventos', 'Aplicacion\EventosController@verFormularioeventos')->name('registroeventos');
            Route::get('/innovacion/crear', 'Aplicacion\InnovacionController@frmInnovacionAbiertaIdentificacion')->name('innovacionabiertaidentificacion');

            /**
             * Rutas iniciativas
             */
            Route::resource('iniciativas', 'Aplicacion\IniciativasController');
//            Route::get('/iniciativa', 'Aplicacion\IniciativasController@iniciativa')->name('iniciativa.create');
//            Route::post('/iniciativa/store', 'Aplicacion\IniciativasController@store')->name('iniciativa.store');

            Route::get('/registro-de-material-de-aprendizaje', 'Aplicacion\MaterialdeaprendizajeController@verFormularioregistromaterial')->name('registromaterial');
        }
    );

//// Adminitrator
//Route::get('/admin', 'HomeController@index')
//    ->name('admin.home');
//
// Route::as('admin.')
//    ->prefix('admin')
//    ->group(
//        function () {
//            // Route::resource('abreviatura', 'AbreviaturaController');
//            Route::get('escritorio', 'Backend\EscritorioController@escritorio')->name('escritorio');
//        }
//    );

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
