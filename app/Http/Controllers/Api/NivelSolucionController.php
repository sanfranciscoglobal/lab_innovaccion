<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\NivelSolucion;
use Illuminate\Http\Request;

class NivelSolucionController extends Controller
{
    //
    public static function NivelSolucionSelect2(Request $request)
    {
        NivelSolucion::$search = $request->search;
        $data = [];
        $Niveles = NivelSolucion::obtenerNivelSolucionAll() ?? [];

        foreach ($Niveles as $Nivel) {
            $data[] = ['id' => $Nivel->id, 'text' => $Nivel->nombre];
        }
        
        return $data;
    }
}
