<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ObjetivoDesarrollo;

class ObjetivosDesarrolloController extends Controller
{
    public static function objetivosDesarrolloSelect2(Request $request)
    {
        $data = [];
        $objetivosdes = ObjetivoDesarrollo::obtenerObjetivosAll() ?? [];

        foreach ($objetivosdes as $objetivodes) {
            $data[] = ['id' => $objetivodes->id, 'text' => $objetivodes->nombre];
        }
        
        return $data;
    }
}
