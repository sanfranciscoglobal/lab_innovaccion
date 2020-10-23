<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoInstitucion;
use Illuminate\Http\Request;

class TipoInstitucionController extends Controller
{
    public static function tipoInstitucionSelect2(Request $request)
    {
        $data = [];
        $tipoInstituciones = TipoInstitucion::obtenerTipoInstitucionAll() ?? [];

        foreach ($tipoInstituciones as $tipoInstitucion) {
            $data[] = ['id' => $tipoInstitucion->id, 'text' => $tipoInstitucion->descripcion];
        }
        return $data;
    }
}
