<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoInstitucion;
use App\Models\TipoSector;
use App\Models\TipoSubsector;


class TipoSectorController extends Controller
{
    public static function tipoSectorSelect2(Request $request,$id)
    {
        TipoSector::$search = $request->search;
        $data = [];
        $tipoSectores = TipoSector::obtenerSectorAll($id) ?? [];

        foreach ($tipoSectores as $tipoSector) {
            $data[] = ['id' => $tipoSector->id, 'text' => $tipoSector->nombre];
        }
        
        return $data;
    }

    public static function tipoSubsectorSelect2(Request $request)
    {
        TipoSubsector::$search = $request->search;
        $data = [];
        $param=json_decode($request->listasectores1);
        TipoSubsector::$listasectores = $param;
        $tipoSubsectores = TipoSubsector::obtenerSubsectores() ?? [];

        foreach ($tipoSubsectores as $tipoSubsector) {
            $data[] = ['id' => $tipoSubsector->id, 'text' => $tipoSubsector->nombre];
        }
        
        return $data;
    }
    
}
