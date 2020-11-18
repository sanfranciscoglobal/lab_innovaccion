<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SectorSolucion;
use Illuminate\Http\Request;

class SectorSolucionController extends Controller
{
    //
    public static function SectorSolucionSelect2(Request $request)
    {

        SectorSolucion::$search = $request->search;
        $data = [];
        $Sectores = SectorSolucion::obtenerSectorSolucionAll() ?? [];

        foreach ($Sectores as $Sector) {
            $data[] = ['id' => $Sector->id, 'text' => $Sector->nombre];
        }
        
        return $data;
    }
}
