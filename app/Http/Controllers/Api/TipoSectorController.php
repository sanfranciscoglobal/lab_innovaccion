<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoInstitucion;
use App\Models\TipoSector;


class TipoSectorController extends Controller
{
    public static function tipoSectorSelect2(Request $request,$id)
    {
        $data = [];
        $tipoSectores = TipoSector::obtenerSectorAll($id) ?? [];

        foreach ($tipoSectores as $tipoSector) {
            $data[] = ['id' => $tipoSector->id, 'text' => $tipoSector->nombre];
        }
        
        return $data;
    }
    
}
