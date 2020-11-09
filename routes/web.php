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

/** RUTAS PUBLICAS */
// Index
Route::get('/', function () {
    return view('aplicacion.home.home');
})->name('home');
Route::get('/acerca-de', function () {
    return view('aplicacion.acerca.acerca');
})->name('acercade');
Route::get('/el-equipo', function () {
    return view('aplicacion.equipo.index');
})->name('elequipo');
Route::get('/valores', function () {
    return view('aplicacion.valores.index');
})->name('valores');
Route::get('/terminos-y-condiciones', function () {
    return view('aplicacion.terminos-condiciones.index');
})->name('terminoscondiciones');
Route::get('/preguntas-frecuentes', function () {
    return view('aplicacion.faq.index');
})->name('faq');

// Users
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/signin', 'Auth\RegisterController@create')->name('signin');
Route::get('/verificar/{id}', 'Auth\VerificationController@verify')->name('verify');
Route::get('/verificacion', function(){
    return redirect()->route('home')->with('error', 'Porfavor verifica tu correo electrónico.');
})->name('verification.notice');

// Sistema
Route::get('/eventos', 'Aplicacion\EventosController@verEventos')->name('eventos');
//Route::get('/iniciativas', 'Aplicacion\IniciativasController@listado')->name('iniciativa.create');
Route::get('/fondos', 'Aplicacion\FondosController@verFondos')->name('fondos');
Route::post('/eventos', 'Aplicacion\EventosController@searchEventos')->name('eventos.search');
Route::get('/iniciativas', 'Aplicacion\IniciativasController@listado')->name('iniciativa.create');
Route::get('/material-de-aprendizaje', 'Aplicacion\MaterialdeaprendizajeController@verListadomateriales')->name('material');
Route::get('/material-de-aprendizaje/{cat}/', 'Aplicacion\MaterialdeaprendizajeController@verCategoriasmateriales')->name('material.categoria');
Route::get('/material-de-aprendizaje/{cat}/{post}/', 'Aplicacion\MaterialdeaprendizajeController@verDetallematerial')->name('material.categoria.detalle');
//Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');


/** RUTAS CON LOGIN */
Route::as('app.')
    ->middleware(['auth', 'verified', 'has-perfil'])
    ->prefix('app')
    ->group(
        function () {

            /*
             Rutas contacto
             */
            Route::get('contacto', 'Aplicacion\HomeController@contacto')->name('contacto');
            Route::post('contacto/store', 'Aplicacion\HomeController@store')->name('contacto.store');


            /**
             * Rutas Usuarios
             */
            Route::get('perfil', 'Aplicacion\RegistroController@show')->name('registro')->withoutMiddleware(['has-perfil']);
            Route::post('perfil/store', 'Aplicacion\RegistroController@store')->name('perfil.post')->withoutMiddleware(['has-perfil']);
            Route::get('perfil/edit', 'Aplicacion\RegistroController@edit')->name('perfil.edit');
            Route::put('perfil/update/{perfil}', 'Aplicacion\RegistroController@update')->name('perfil.put');
            Route::delete('usuario/delete/{user}', 'Aplicacion\RegistroController@destroy')->name('user.delete');


            /**
             * Rutas Fondos
             */
            Route::get('fondos', 'Aplicacion\FondosController@showForm')->name('fondos');
            Route::get('fondos/{fondo}/{slug}', 'Aplicacion\FondosController@edit')->name('fondos.edit');
            Route::post('fondos/store', 'Aplicacion\crudFondos@store')->name('fondos.post');
            Route::put('fondos/update/{fondo}', 'Aplicacion\crudFondos@update')->name('fondos.put');
            Route::delete('fondos/delete/{fondo}', 'Aplicacion\crudFondos@destroy')->name('fondos.delete');


            /**
             * Rutas Eventos
             */
            Route::get('/eventos', 'Aplicacion\EventosController@showForm')->name('eventos');
            Route::get('/eventos/{id}', 'Aplicacion\EventosController@edit')->name('eventos.edit');
            Route::post('/eventos', 'Aplicacion\crudEventos@store')->name('eventos.post');
            Route::put('/eventos/{evento}', 'Aplicacion\crudEventos@update')->name('eventos.put');
            Route::delete('/eventos/{evento}', 'Aplicacion\crudEventos@destroy')->name('eventos.delete');


            /**
             * Material de aprendizaje
             */
            Route::get('/material-de-aprendizaje', 'Aplicacion\MaterialdeaprendizajeController@showForm')->name('material-de-aprendizaje');
            Route::post('/material-de-aprendizaje', 'Aplicacion\crudMaterialesaprendizaje@store')->name('material-de-aprendizaje.post');
            Route::get('/material-de-aprendizaje/{id}', 'Aplicacion\MaterialdeaprendizajeController@edit')->name('material-de-aprendizaje.edit');
            Route::put('/material-de-aprendizaje/{material}', 'Aplicacion\crudMaterialesaprendizaje@update')->name('material-de-aprendizaje.put');
            Route::delete('/material-de-aprendizaje/{material}', 'Aplicacion\crudMaterialesaprendizaje@destroy')->name('material-de-aprendizaje.delete');

            // Route::get('/registro-de-material-de-aprendizaje', 'Aplicacion\MaterialdeaprendizajeController@verFormularioregistromaterial')->name('registromaterial');
             Route::post('/ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');


            /**
             * Rutas iniciativas
             */
            Route::resource('iniciativas', 'Aplicacion\IniciativasController');
            //Route::get('/iniciativa', 'Aplicacion\IniciativasController@create')->name('iniciativa.create');
            //Route::post('/iniciativa/store', 'Aplicacion\IniciativasController@store')->name('iniciativa.store');


            /** Rutas Innovacion */
            //FASE A
            Route::get('/innovacion/crear', 'Aplicacion\InnovacionController@frmInnovacionAbiertaIdentificacion')->name('innovacionabiertaidentificacion');
            Route::get('/innovacion/crear/{id}', 'Aplicacion\crudConvocatoria@edit')->name('convocatoria.edit');
            Route::put('/innovacion/crear/{convocatoria}', 'Aplicacion\crudConvocatoria@update')->name('convocatoria.put');
            Route::post('/innovacion/crear', 'Aplicacion\crudConvocatoria@store')->name('convocatoria.post');
            Route::delete('/innovacion/crear/{convocatoria}', 'Aplicacion\crudConvocatoria@destroy')->name('convocatoria.delete');
            //FASE B
            Route::get('/innovacion/gestion/{convocatoria}', 'Aplicacion\InnovacionController@frmGestionInnocavion')->name('innovaciongestion');
            Route::post('/innovacion/gestion/store', 'Aplicacion\crudProblemas@store')->name('problemas.store');


            /** Rutas Escritorio */
            Route::get('/escritorio', 'Aplicacion\EscritorioController@verEscritorio')->name('escritorio')->middleware('auth');
            Route::get('/escritorio/eventos', 'Aplicacion\EscritorioController@verEventos')->name('escritorio.eventos')->middleware('auth');
            Route::get('/escritorio/material', 'Aplicacion\EscritorioController@verMateriales')->name('escritorio.material')->middleware('auth');
            Route::get('/escritorio/fondos', 'Aplicacion\EscritorioController@verFondos')->name('escritorio.fondos');

        }
    );


/** RUTAS ADMINISTRATIVAS */
Route::as('admin.')
    ->middleware(['auth', 'verified', 'has-perfil', 'acceso-app:admin,superadmin'])
    ->prefix('admin')
    ->group(
        function () {
            // Route::resource('abreviatura', 'AbreviaturaController');
            Route::get('escritorio', 'Backend\EscritorioController@escritorio')->name('escritorio');
        }
    );

Route::as('web.')
    ->group(
        function () {
            Route::resource('iniciativas', 'Web\IniciativasController');
            Route::post('iniciativas', 'Web\IniciativasController@index')->name('iniciativas.index');
        }
    );

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
