<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OdsCategoria;
use Illuminate\Http\Request;

class OdsCategoriaController extends Controller
{
    public static function odsCategoriaSelect2(Request $request)
    {
        $data = [];
        OdsCategoria::$search = $request->has('search') ? $request->search : null;
        $odsCategorias = OdsCategoria::obtenerOdsCategoriaAll() ?? [];

        foreach ($odsCategorias as $odsCategoria) {
            $data[] = ['id' => $odsCategoria->id, 'text' => "ODS {$odsCategoria->id}: {$odsCategoria->nombre}"];
        }

        return $data;
    }
}
