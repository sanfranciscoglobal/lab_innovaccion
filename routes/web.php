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
Route::get('/', 'Aplicacion\HomeController@home')->name('home');
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
Route::get('/verificacion', function () {
    return redirect()->route('home')->with('error', 'Por favor verifica tu correo electrónico.');
})->name('verification.notice');
Route::get('reset-password', 'Auth\ForgotPasswordController@show')->middleware(['guest'])->name('reset');
Route::post('reset-password', 'Auth\ResetPasswordController@send')->name('password.email');
Route::get('reset-password/{user}', 'Auth\LoginController@reset')->name('password.login');
Route::get('change-password/edit', 'Auth\ConfirmPasswordController@show')->name('password.edit');
Route::post('change-password/edit', 'Auth\ConfirmPasswordController@update')->name('password.update');

// Sistema
Route::get('/eventos', 'Aplicacion\EventosController@verEventos')->name('eventos');
Route::get('/eventos/{evento}', 'Aplicacion\EventosController@verEventodetalle')->name('eventodetalle');
//Route::get('/iniciativas', 'Aplicacion\IniciativasController@listado')->name('iniciativa.create');
Route::get('/fondos', 'Aplicacion\FondosController@verFondos')->name('fondos');
Route::post('/eventos', 'Aplicacion\EventosController@searchEventos')->name('eventos.search');
Route::get('/iniciativas', 'Aplicacion\IniciativasController@listado')->name('iniciativa.create');
Route::get('/publicacion-herramienta', 'Aplicacion\MaterialdeaprendizajeController@verListadomateriales')->name('material');
Route::get('/publicacion-herramienta/{material}', 'Aplicacion\MaterialdeaprendizajeController@verDetalle')->name('material.detalle');
Route::get('/publicacion-herramienta/download/{articulo}', 'Aplicacion\MaterialdeaprendizajeController@download')->name('material.download');
Route::get('/publicacion-herramienta/comentario/{material}', 'Aplicacion\MaterialdeaprendizajeController@comment')->name('material-de-aprendizaje.comentario');
// Route::get('/material-de-aprendizaje/{cat}/', 'Aplicacion\MaterialdeaprendizajeController@verCategoriasmateriales')->name('material.categoria');
// Route::get('/material-de-aprendizaje/{cat}/{post}/', 'Aplicacion\MaterialdeaprendizajeController@verDetallematerial')->name('material.categoria.detalle');

Route::get('/gestion-innovacion', 'Aplicacion\InnovacionController@verInnovaciones')->name('innovaciones');
Route::post('/gestion-innovacion', 'Aplicacion\InnovacionController@searchConvocatorias')->name('convocatorias.search');

Route::get('/gestion-innovacion/problemas/{convocatoria}', 'Aplicacion\InnovacionController@verProblemas')->name('innovaciongestion.ver');
Route::get('/gestion-innovacion/soluciones/{problema}', 'Aplicacion\SolucionController@verSoluciones')->name('soluciones.ver');
Route::get('/gestion-innovacion/soluciones/detalle/{solucion}', 'Aplicacion\SolucionController@verSoluciondetalle')->name('soluciondetalle.ver');
Route::get('/gestion-innovacion/soluciones/download/{solucion}', 'Aplicacion\SolucionController@download')->name('soluciones.download');



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
            Route::get('/eventos/{evento}', 'Aplicacion\EventosController@edit')->name('eventos.edit');
            Route::post('/eventos', 'Aplicacion\crudEventos@store')->name('eventos.post');
            Route::put('/eventos/{evento}', 'Aplicacion\crudEventos@update')->name('eventos.put');
            Route::delete('/eventos/{evento}', 'Aplicacion\crudEventos@destroy')->name('eventos.delete');


            /**
             * Material de aprendizaje
             */
            Route::get('/publicacion-herramienta', 'Aplicacion\MaterialdeaprendizajeController@showForm')->name('material-de-aprendizaje');
            Route::post('/publicacion-herramienta', 'Aplicacion\crudMaterialesaprendizaje@store')->name('material-de-aprendizaje.post');
            Route::get('/publicacion-herramienta/{material}', 'Aplicacion\MaterialdeaprendizajeController@edit')->name('material-de-aprendizaje.edit');
            Route::put('/publicacion-herramienta/{material}', 'Aplicacion\crudMaterialesaprendizaje@update')->name('material-de-aprendizaje.put');
            Route::delete('/publicacion-herramienta/{material}', 'Aplicacion\crudMaterialesaprendizaje@destroy')->name('material-de-aprendizaje.delete');
            // Route::get('/publicacion-herramienta/comentario/{material}', 'Aplicacion\crudMaterialesaprendizaje@comment')->name('material-de-aprendizaje.comentario');

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
            // Route::get('/innovacion/crear', 'Aplicacion\InnovacionController@frmInnovacionAbiertaIdentificacion')->name('innovacionabiertaidentificacion');
            // Route::get('/innovacion/crear/{id}', 'Aplicacion\crudConvocatoria@edit')->name('convocatoria.edit');
            // Route::put('/innovacion/crear/{convocatoria}', 'Aplicacion\crudConvocatoria@update')->name('convocatoria.put');
            // Route::post('/innovacion/crear', 'Aplicacion\crudConvocatoria@store')->name('convocatoria.post');
            // Route::delete('/innovacion/crear/{convocatoria}', 'Aplicacion\crudConvocatoria@destroy')->name('convocatoria.delete');
            //FASE B
            Route::get('innovacion/gestion/{convocatoria}', 'Aplicacion\InnovacionController@frmGestionInnovacion')->name('innovaciongestion');
            Route::get('innovacion/gestion/{convocatoria}/{problema}', 'Aplicacion\InnovacionController@frmGestionInnovacionEdit')->name('problemas.edit');
            Route::post('innovacion/gestion/store', 'Aplicacion\crudProblemas@store')->name('problemas.store');
            Route::put('innovacion/gestion/update/{problema}', 'Aplicacion\crudProblemas@update')->name('problemas.update');
            Route::put('innovacion/gestion/update/fase2/{problema}', 'Aplicacion\crudProblemas@updateFase2')->name('problemas.update.fase2');
            Route::put('innovacion/gestion/update/fase3/{problema}', 'Aplicacion\crudProblemas@updateFase3')->name('problemas.update.fase3');
            Route::delete('innovacion/gestion/delete/{problema}', 'Aplicacion\crudProblemas@destroy')->name('problemas.delete');

            //SOLUCION

            Route::get('innovacion/solucion/crear/{problema}', 'Aplicacion\SolucionController@frmSolucion')->name('soluciones.crear');
            Route::post('innovacion/solucion/store', 'Aplicacion\crudSoluciones@store')->name('soluciones.store');
            Route::get('innovacion/solucion/edit/{problema}/{solucion}', 'Aplicacion\SolucionController@frmSolucionEdit')->name('soluciones.edit');
            Route::put('innovacion/solucion/update/{solucion}', 'Aplicacion\crudSoluciones@update')->name('soluciones.update');
            Route::put('innovacion/solucion/update/fase2/{solucion}', 'Aplicacion\crudSoluciones@updateFase2')->name('soluciones.update.fase2');
            Route::put('innovacion/solucion/update/fase3/{solucion}', 'Aplicacion\crudSoluciones@updateFase3')->name('soluciones.update.fase3');
            Route::delete('innovacion/solucion/delete/{solucion}', 'Aplicacion\crudSoluciones@destroy')->name('soluciones.delete');
            Route::get('innovacion/solucion/observacioncrear', 'Aplicacion\crudSoluciones@observacioncrear')->name('soluciones.observacioncrear');

            Route::post('innovacion/solucion/mejorada/{solucion}', 'Aplicacion\crudSoluciones@mejorada')->name('solucion.mejorada');
            Route::put('innovacion/solucion/mejorada/update/{solucion_mejorada}', 'Aplicacion\crudSoluciones@mejoradaUpdate')->name('solucion.mejorada.update');

            Route::post('innovacion/solucion/rating/{solucion}', 'Aplicacion\crudSoluciones@rating')->name('solucion.rating');
            Route::post('innovacion/solucion/comentario/{solucion}', 'Aplicacion\crudSoluciones@comentario')->name('solucion.comentario');


            /** Rutas Escritorio */
            Route::get('/escritorio', 'Aplicacion\EscritorioController@verEscritorio')->name('escritorio')->middleware('auth');
            Route::get('/escritorio/eventos', 'Aplicacion\EscritorioController@verEventos')->name('escritorio.eventos')->middleware('auth');
            Route::get('/escritorio/publicacion-herramienta', 'Aplicacion\EscritorioController@verMateriales')->name('escritorio.material')->middleware('auth');
            Route::get('/escritorio/fondos', 'Aplicacion\EscritorioController@verFondos')->name('escritorio.fondos');
            Route::get('/escritorio/problemas', 'Aplicacion\EscritorioController@verProblemas')->name('escritorio.problemas');
            Route::get('/escritorio/soluciones', 'Aplicacion\EscritorioController@verSoluciones')->name('escritorio.soluciones');

        }
    );


/** RUTAS ADMINISTRATIVAS */
Route::as('admin.')
    ->middleware(['auth', 'verified', 'has-perfil', 'acceso-app:admin,superadmin'])
    ->prefix('admin')
    ->group(
        function () {
            // Route::resource('abreviatura', 'AbreviaturaController');
            Route::get('dashboard', 'Backend\DashboardController@dashboard')->name('escritorio');
            Route::get('/escritorio/inicial', 'Backend\DashboardController@verInicial')->name('escritorio.incial');
            Route::get('/escritorio/convocatorias', 'Backend\DashboardController@verConvocatoria')->name('escritorio.convocatoria');
            /** Rutas Innovacion */
            //FASE A
            Route::get('/innovacion/crear', 'Aplicacion\InnovacionController@frmInnovacionAbiertaIdentificacion')->name('innovacionabiertaidentificacion');
            Route::get('/innovacion/crear/{id}', 'Aplicacion\crudConvocatoria@edit')->name('convocatoria.edit');
            Route::put('/innovacion/crear/{convocatoria}', 'Aplicacion\crudConvocatoria@update')->name('convocatoria.put');
            Route::post('/innovacion/crear', 'Aplicacion\crudConvocatoria@store')->name('convocatoria.post');
            Route::delete('/innovacion/crear/{convocatoria}', 'Aplicacion\crudConvocatoria@destroy')->name('convocatoria.delete');

            /** Iniciativas */
            Route::resource('iniciativas', 'Backend\IniciativasController');
            Route::get('iniciativas/{id}/activar', 'Backend\IniciativasController@activar')->name('iniciativas.activar');


            /** Fondos */
            Route::resource('fondos', 'Backend\FondosController');
            Route::get('fondos/{id}/activar', 'Backend\FondosController@activar')->name('fondos.activar');

            /** Eventos */
            Route::resource('eventos', 'Backend\EventosController');
            Route::get('eventos/{id}/activar', 'Backend\EventosController@activar')->name('eventos.activar');

            /** Publicaciones */
            Route::resource('material-aprendizaje', 'Backend\MaterialAprendizajeController');
            Route::get('material-aprendizaje/{id}/activar', 'Backend\MaterialAprendizajeController@activar')->name('material-aprendizaje.activar');
        }
    );

Route::as('web.')
    ->group(
        function () {
            Route::resource('iniciativas', 'Web\IniciativasController');
            Route::get('analiticas', 'Web\IniciativasController@analiticas')->name('iniciativas.analiticas');
            Route::post('iniciativas', 'Web\IniciativasController@index')->name('iniciativas.index');
            Route::post('iniciativas/export', 'Web\IniciativasController@exportarExcel')->name('iniciativas.exportar-excel');
            Route::get('mapa', 'Web\IniciativasController@data')->name('iniciativas.mapa');
            Route::post('mapa', 'Web\IniciativasController@data')->name('iniciativas.data');
        }
    );

Route::get('/admin/acerca-de', function () {
    return view('aplicacion.acerca.acerca-test');
})->name('acercade-admin');
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


Route::get('ar-test', function(){
    return view('ar-test');
});