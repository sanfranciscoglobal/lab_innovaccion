<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });

Route::get('/obtener-tipo-institucion-select2', 'Api\TipoInstitucionController@tipoInstitucionSelect2')->name('api.tipo-institucion.select2');
Route::post('/obtener-tipo-institucion-select2', 'Api\TipoInstitucionController@tipoInstitucionSelect2')->name('api.tipo-institucion.select2');

Route::get('/obtener-tipo-poblacion-select2', 'Api\TipoPoblacionController@tipoPoblacionSelect2')->name('api.tipo-poblacion.select2');
Route::post('/obtener-tipo-poblacion-select2', 'Api\TipoPoblacionController@tipoPoblacionSelect2')->name('api.tipo-poblacion.select2');

Route::get('/obtener-ods-categoria-select2', 'Api\OdsCategoriaController@odsCategoriaSelect2')->name('api.ods-categoria.select2');

Route::get('/obtener-tipo-sector-select2/{id}', 'Api\TipoSectorController@tipoSectorSelect2')->name('api.tipo-sector.select2');
Route::post('/obtener-tipo-sector-select2/{id}', 'Api\TipoSectorController@tipoSectorSelect2')->name('api.tipo-sector.select2');

Route::get('/obtener-tipo-subsector-select2', 'Api\TipoSectorController@tipoSubsectorSelect2')->name('api.tipo-subsector.select2');
Route::post('/obtener-tipo-subsector-select2', 'Api\TipoSectorController@tipoSubsectorSelect2')->name('api.tipo-subsector.select2');

Route::get('/obtener-material-categoria-select2', 'Api\MaterialCategoriaController@materialcategoriaSelect2')->name('api.material-categoria.select2');
// Route::post('/obtener-material-categoria', 'Api\MaterialCategoriaController@materialcategoriaSelect2')->name('api.material-categoria.select2');

//Route::get('/obtener-material-documento-select2', 'Api\MaterialTipoDocumentoController@materialtipodocSelect2')->name('api.material-documento.select2');
Route::post('/obtener-material-categoria-image', 'Api\MaterialCategoriaController@materialcategoriasearch')->name('api.material-categoria.image');
Route::post('/obtener-material-documento-select2', 'Api\MaterialTipoDocumentoController@materialtipodocSelect2')->name('api.material-documento.select2');


Route::get('/obtener-objetivos-desarrollo-select2', 'Api\ObjetivosDesarrolloController@objetivosDesarrolloSelect2')->name('api.objetivo-desarrollo.select2');


Route::get('/obtener-canton-select2', 'Api\CantonController@cantonSelect2')->name('api.canton.select2');
Route::post('/obtener-canton-select2', 'Api\CantonController@cantonSelect2')->name('api.canton.select2');

Route::get('/obtener-canton-select22', 'Api\CantonController@cantonSelect2nombre')->name('api.canton.select22');
Route::post('/obtener-canton-select22', 'Api\CantonController@cantonSelect2nombre')->name('api.canton.select22');

/** Soluciones api */

Route::get('/obtener-sector-solucion-select2', 'Api\SectorSolucionController@SectorSolucionSelect2')->name('api.sector-solucion.select2');
Route::get('/obtener-nivel-solucion-select2', 'Api\NivelSolucionController@NivelSolucionSelect2')->name('api.nivel-solucion.select2');
Route::get('/obtener-tipo-propuesta-select2', 'Api\TipoPropuestaController@TipoPropuestaSelect2')->name('api.tipo-propuesta.select2');

Route::get('/obtener_iniciativa_actor_autocomplete', 'Api\IniciativasController@iniciativaActorAutoComplete')->name('api.iniciativa-actor-autocomplete');


Route::as('api.analitica.')
    ->prefix('analitica')
    ->group(
        function () {
            Route::post('iniciativas-ods', 'Api\IniciativasController@analiticaIniciativaOds')->name('iniciativa-ods');
            Route::post('iniciativas-poblacion', 'Api\IniciativasController@analiticaIniciativaPoblacion')->name('iniciativa-poblacion');
            Route::post('iniciativas-institucion', 'Api\IniciativasController@analiticaIniciativaInstitucion')->name('iniciativa-institucion');
            Route::post('iniciativas-ods-institucion', 'Api\IniciativasController@analiticaIniciativaOdsInstitucion')->name('iniciativa-ods-institucion');
        }
    );