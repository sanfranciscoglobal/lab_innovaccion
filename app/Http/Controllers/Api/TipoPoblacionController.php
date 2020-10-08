<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoPoblacion;
use Illuminate\Http\Request;

class TipoPoblacionController extends Controller
{
    public static function tipoPoblacionSelect2(Request $request)
    {
        $data = [];
        $tipoPoblaciones = TipoPoblacion::obtenerTipoPoblacionAll() ?? [];

        foreach ($tipoPoblaciones as $tipoPoblacion) {
            $data[] = ['id' => $tipoPoblacion->id, 'text' => $tipoPoblacion->descripcion];
        }

        return $data;
    }
}
