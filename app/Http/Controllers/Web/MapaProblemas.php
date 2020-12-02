<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\IniciativasExport;
use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Models\Canton;
use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use App\Models\TipoInstitucion;
use App\Models\TipoPoblacion;
use App\Models\Problema;
use App\Models\Convocatoria;
use App\Models\TipoConvocatoria;
use App\Models\User;
use Carbon\Carbon;

class MapaProblemas extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function data(Request $request)
    {
        $convocatorias=TipoConvocatoria::all();
        foreach( $convocatorias as $tipo){
            $tipo=$tipo->convocatorias;
            foreach( $tipo as $conv){
                $conv->problemas;
            }

        }
       
        Iniciativas::$search = $request->has('buscar') ? $request->buscar : null;
        Iniciativas::$search_canton_id = $request->has('canton_id') ? $request->canton_id : [];
        Iniciativas::$search_tipo_institucion = $request->has('tipo_institucion') ? $request->tipo_institucion : [];
        Iniciativas::$search_ods_categorias = $request->has('ods_categorias') ? $request->ods_categorias : [];
        Iniciativas::$search_tipo_poblacion = $request->has('tipo_poblacion') ? $request->tipo_poblacion : [];
        $cantones = Canton::whereIn('id', Iniciativas::$search_canton_id)->get();
        $tipoInstituciones = TipoInstitucion::whereIn('id', Iniciativas::$search_tipo_institucion)->get();
        $odsCategorias = OdsCategoria::whereIn('id', Iniciativas::$search_ods_categorias)->get();
        $tipoPoblaciones = TipoPoblacion::whereIn('id', Iniciativas::$search_tipo_poblacion)->get();
        $buscar = $request->buscar;
        $iniciativas=Iniciativas::obtenerIniciativasAll();
        foreach( $iniciativas as $x){
           $x->iniciativaUbicaciones; 
           $x->iniciativaOds;
           $x->iniciativaPoblacionesCompleto;
        }
        return view('web.iniciativas.problemasmapa',compact('iniciativas','convocatorias'));
    }
}
