<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
            $value = $odsCategoria->IniciativaOds()->count();

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
            $value = $tipoPoblacion->IniciativaPoblacion()->count();
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
            $value = $tipoInstitucion->iniciativaInstitucion()->count();
            if ($value) {
                $data[] = [
                    'value' => $value,
                    'text' => "{$tipoInstitucion->descripcion}"
                ];

                $total[] = $value;
            }
        }

        return [
            'items' => $data,
            'total' => max($total),
        ];
    }
}
