<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialCategorias;
use Illuminate\Support\Facades\Storage;

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
    public static function materialcategoriasearch(Request $request)
    {
        $data_image=MaterialCategorias::find($request->categoria);
        $img=asset('img/logo/thinkia_color.svg');
        if(Storage::disk('tiposdocumento')->exists($data_image->imagen)){
            $img = asset('storage/tiposdocumento').'/'.$data_image->imagen;
        }
        
        
        return response()->json($img,200);
    }
}
