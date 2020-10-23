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

Route::get('/obtener-tipo-poblacion-select2', 'Api\TipoPoblacionController@tipoPoblacionSelect2')->name('api.tipo-poblacion.select2');

Route::get('/obtener-ods-categoria-select2', 'Api\OdsCategoriaController@odsCategoriaSelect2')->name('api.ods-categoria.select2');

Route::get('/obtener-tipo-sector-select2/{id}', 'Api\TipoSectorController@tipoSectorSelect2')->name('api.tipo-sector.select2');

Route::get('/obtener-canton-select2', 'Api\CantonController@cantonSelect2')->name('api.canton.select2');
Route::post('/obtener-canton-select2', 'Api\CantonController@cantonSelect2')->name('api.canton.select2');


