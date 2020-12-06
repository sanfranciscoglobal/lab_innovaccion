<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialTipodocumento;

class MaterialTipoDocumentoController extends Controller
{
    public static function materialtipodocSelect2(Request $request)
    {
        MaterialTipodocumento::$search = $request->search;
        $data = [];
        $Materialdocumentos = MaterialTipodocumento::obtenermaterialtipoAll() ?? [];

        foreach ($Materialdocumentos as $documento) {
            $data[] = ['id' => $documento->id, 'text' => $documento->nombre];
        }
        return $data;
    }
}
