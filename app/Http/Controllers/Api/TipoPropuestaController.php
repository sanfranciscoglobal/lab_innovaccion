<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TipoPropuesta;
use Illuminate\Http\Request;

class TipoPropuestaController extends Controller
{
    //
    public static function TipoPropuestaSelect2(Request $request)
    {

        TipoPropuesta::$search = $request->search;
        $data = [];
        $Propuestas = TipoPropuesta::obtenertipopropuestaAll() ?? [];

        foreach ($Propuestas as $Propuesta) {
            $data[] = ['id' => $Propuesta->id, 'text' => $Propuesta->nombre];
        }
        
        return $data;
    }
}
