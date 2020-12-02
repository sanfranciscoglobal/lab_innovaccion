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
        $totales = [];
        $data = [];
        $odsCategorias = OdsCategoria::obtenerOdsCategoriaAll();


        foreach ($odsCategorias as $odsCategoria) {
            $value = $odsCategoria->IniciativaOds()->count();

            if ($value) {
                $data[] = [
                    'value' => $value,
                    'text' => "ODS {$odsCategoria->id}"
                ];

                $total[] = $value;
            }
        }

        return [
            'items' => $data,
            'total' => max($total),
        ];
    }

    public static function analiticaIniciativaPoblacion(Request $request)
    {
        $total = [];
        $data = [];
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
}
