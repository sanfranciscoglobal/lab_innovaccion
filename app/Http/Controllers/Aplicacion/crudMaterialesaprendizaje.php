<?php

namespace App\Http\Controllers\Aplicacion;

use Illuminate\Http\Request;

use App\Models\MaterialAprendizaje;
use App\Models\Articulo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk

class crudMaterialesaprendizaje extends Controller
{
    //
    public function __construct(){
        $this->middleware(['auth', 'acceso-app:user']);
    }
    public function store(Request $request)
    {
        $input=$request->all();
       // return(response()->json($input));
       // $max_size=(int)ini_get('upload_max_filesize')*1024;
        $user_id=Auth::id();
        $material=MaterialAprendizaje::create([
            "user_id"=>$user_id,
            "nombre_publicacion"=>$input["nombre_publicacion"],
            "fecha_publicacion"=>$input["fecha_publicacion"],
            "tema_tratado"=>$input["tema_tratado"],
            "tipo_documento"=>$input["tipo_documento"],
            "imagen_portada"=>$input["imagen_portada"],
            "fuente_publicacion"=>$input["fuente_publicacion"],
            "autor_publicacion"=>$input["autor_publicacion"],
            "terminos"=>$input["terminos"]
        ]);
        
        if($material){
            $name = CustomUrl::urlTitle($material['nombre_publicacion'] ).'_'.$material->id;
            if(isset($material['imagen_portada'])){
                
                $imageName = Archivos::storeImagen($name, $material['imagen_portada'], 'public');
                
                $material->imagen_portada = $imageName;
                $material->save();
            }

            $files= $request->file('mat_files');
            
            foreach ($files as $file){
                $fileName = $file->getClientOriginalName();
                
                $articulo=Articulo::create([
                    'material_id'=>$material['id'],
                    'nombre' =>$fileName   
                ]);
                $articulo->save();
            }
            return redirect()->route('app.home')->with('status', 'Material creado con éxito');         
        }

    }
}
