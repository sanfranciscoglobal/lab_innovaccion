<?php

namespace App\Http\Controllers\Api;

use App\Helpers\CustomUrl;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\IniciativaActor;
use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use App\Models\TipoInstitucion;
use App\Models\TipoPoblacion;
use Illuminate\Http\Request;

class IniciativasController extends Controller
{
    public static function analiticaIniciativaOds(Request $request)
    {
        $totales = $data = [];
        OdsCategoria::$search = $request->has('ods_categorias') ? $request->ods_categorias : null;
        $odsCategorias = OdsCategoria::obtenerOdsCategoriaAll();

        foreach ($odsCategorias as $odsCategoria) {
            $rsIniciativas = $odsCategoria->IniciativaOds();

            $rsIniciativas->join('iniciativas', 'iniciativa_ods.iniciativa_id', '=', 'iniciativas.id');

            if (is_array($request->tipo_institucion) && $request->tipo_institucion) {
                $rsIniciativas->join('iniciativa_institucion', 'iniciativa_institucion.iniciativa_id', '=', 'iniciativas.id');
                $rsIniciativas->whereIn('iniciativa_institucion.tipo_institucion_id', $request->tipo_institucion);
            }

            if (is_array($request->tipo_poblacion) && $request->tipo_poblacion) {
                $rsIniciativas->join('iniciativa_poblacion', 'iniciativa_poblacion.iniciativa_id', '=', 'iniciativas.id');
                $rsIniciativas->whereIn('iniciativa_poblacion.tipo_poblacion_id', $request->tipo_poblacion);
            }

            $value = $rsIniciativas
                ->distinct('iniciativa_ods.*')
                ->count('iniciativa_ods.iniciativa_id');


            if ($value) {
                $data[] = [
                    'value' => $value,
                    'text' => "ODS {$odsCategoria->id}"
                ];

                $totales[] = $value;
            }
        }

        return [
            'items' => $data,
            'total' => max($totales),
        ];
    }

    public static function analiticaIniciativaPoblacion(Request $request)
    {
        $total = $data = [];

        TipoPoblacion::$search = $request->has('tipo_poblacion') ? $request->tipo_poblacion : null;
        $tipoPoblaciones = TipoPoblacion::obtenerTipoPoblacionAll();

        foreach ($tipoPoblaciones as $tipoPoblacion) {
            $rsIniciativas = $tipoPoblacion->IniciativaPoblacion();

            $rsIniciativas->join('iniciativas', 'iniciativa_poblacion.iniciativa_id', '=', 'iniciativas.id');

            if (is_array($request->tipo_institucion) && $request->tipo_institucion) {
                $rsIniciativas->join('iniciativa_institucion', 'iniciativa_institucion.iniciativa_id', '=', 'iniciativas.id');
                $rsIniciativas->whereIn('iniciativa_institucion.tipo_institucion_id', $request->tipo_institucion);
            }

            if (is_array($request->ods_categorias) && $request->ods_categorias) {
                $rsIniciativas->join('iniciativa_ods', 'iniciativa_ods.iniciativa_id', '=', 'iniciativas.id');
                $rsIniciativas->whereIn('iniciativa_ods.ods_categoria_id', $request->ods_categorias);
            }

            $value = $rsIniciativas
                ->distinct('iniciativa_poblacion.*')
                ->count('iniciativa_poblacion.iniciativa_id');

            if ($value) {
                $data[] = [
                    'value' => $value,
                    'text' => "{$tipoPoblacion->descripcion}"
                ];

                $total[] = $value;
            }
        }

        return [
            'items' => $data,
            'total' => max($total),
        ];
    }

    public static function analiticaIniciativaInstitucion(Request $request)
    {
        $total = $data = [];
        TipoInstitucion::$search = $request->has('tipo_institucion') ? $request->tipo_institucion : null;
        $tipoInstituciones = TipoInstitucion::obtenerTipoInstitucionAll();

        foreach ($tipoInstituciones as $tipoInstitucion) {
            $rsIniciativas = $tipoInstitucion->iniciativaInstitucionOrganizacion();
            $value = $tipoInstitucion->iniciativaInstitucionOrganizacion()->count();

            //$rsIniciativas->join('iniciativas', 'iniciativa_institucion.iniciativa_id', '=', 'iniciativas.id');

            if (is_array($request->tipo_poblacion) && $request->tipo_poblacion) {
                $rsIniciativas->join('iniciativa_poblacion', 'iniciativa_poblacion.iniciativa_id', '=', 'iniciativas.id');
                $rsIniciativas->whereIn('iniciativa_poblacion.tipo_poblacion_id', $request->tipo_poblacion);
            }

            if (is_array($request->ods_categorias) && $request->ods_categorias) {
                $rsIniciativas->join('iniciativa_ods', 'iniciativa_ods.iniciativa_id', '=', 'iniciativas.id');
                $rsIniciativas->whereIn('iniciativa_ods.ods_categoria_id', $request->ods_categorias);
            }

            $value = $rsIniciativas
                ->distinct('iniciativa_institucion.*')
                ->count('iniciativa_institucion.iniciativa_id');

            if ($value) {
                $data[] = [
                    'value' => $value,
                    'text' => "{$tipoInstitucion->descripcion}"
                ];

                $total[] = $value;
            }
        }

        if (!TipoInstitucion::$search) {
            if (($value = Iniciativas::obtenerIniciativasIndividualesCount()) && $value > 0) {
                $data[] = [
                    'value' => $value,
                    'text' => "Individual"
                ];

                $total[] = $value;
            }
        }


        return [
            'items' => $data,
            'total' => max($total),
        ];
    }

    public static function analiticaIniciativaOdsInstitucion(Request $request)
    {
        $data = $categorias = [];
        OdsCategoria::$search = $request->has('ods_categorias') ? $request->ods_categorias : [];
        $categoriaOds = OdsCategoria::obtenerOdsCategoriaAll();

        TipoInstitucion::$search = $request->has('tipo_institucion') ? $request->tipo_institucion : [];
        $tipoInstitucion = TipoInstitucion::obtenerTipoInstitucionAll();

        Iniciativas::$search_tipo_poblacion = $request->has('tipo_poblacion') ? $request->tipo_poblacion : [];

        foreach ($categoriaOds as $key => $ods) {
            foreach ($tipoInstitucion as $institucion) {
                Iniciativas::$search_ods_categorias = [$ods->id];
                Iniciativas::$search_tipo_institucion = [$institucion->id];
                $iniciativas = Iniciativas::obtenerIniciativasCount();

                if ($iniciativas > 0) {
                    $cat = CustomUrl::convertAccentedCharacters($institucion->descripcion);
                    $cat = CustomUrl::urlTitle(mb_strtolower($cat), '_');
                    $data[$key]['year'] = "ODS {$ods->id}";
                    $data[$key][$cat] = $iniciativas;
                    $categorias[$cat] = $institucion->descripcion;
                }
            }
        }

        return [
            'data' => $data,
            'categorias' => $categorias,
        ];
    }

    public static function iniciativaActorAutoComplete(Request $request)
    {
        $data = [];
        if ($iniciativaActor = IniciativaActor::iniciativaActorNombreLike($request->term)) {
            foreach ($iniciativaActor as $actor) {
                $data[] = [
                    'id' => $actor->id,
                    'label' => $actor->nombre_organizacion . ' (' . $actor->siglas . ')',
                    'value' => $actor->nombre_organizacion,
                    'siglas' => $actor->siglas,
                    'sitio_web' => $actor->sitio_web,
                ];
            }
        }
        return $data;
    }
}
