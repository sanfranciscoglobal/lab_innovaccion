<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialCategorias;

class MaterialCategoriaController extends Controller
{
    public static function materialcategoriaSelect2(Request $request)
    {
        
        MaterialCategorias::$search = $request->search;
        $data = [];
        $Categorias = MaterialCategorias::obtenermaterialcategoriaAll() ?? [];

        foreach ($Categorias as $Categoria) {
            $data[] = ['id' => $Categoria->id, 'text' => $Categoria->nombre];
        }
        return $data;
    }
}
