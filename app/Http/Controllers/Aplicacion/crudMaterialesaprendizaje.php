<?php

namespace App\Http\Controllers\Aplicacion;

use Illuminate\Http\Request;

use App\Models\MaterialAprendizaje;
use App\Models\Articulo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Materiales\StorePost;
use App\Http\Requests\Materiales\UpdatePost;
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
        $this->middleware(['auth', 'verified', 'has-perfil']);
        $this->middleware('acceso-app:user,admin,superadmin')->except('destroy');
        $this->middleware('acceso-app:user,superadmin')->only('destroy');
    }
    public function store(StorePost $request){
       
        try{
            $validatedData=$request->validated();
           
            if($material=MaterialAprendizaje::create($validatedData)){
                
                if(isset($material['imagen_portada'])){
                    $name = CustomUrl::urlTitle($material['nombre_publicacion'] ).'_'.$material->id;
                    $imageName = Archivos::storeImagen($name, $material['imagen_portada'], 'materiales');
                    $material->imagen_portada = $imageName;
                    $material->save();
                }
            
            $files= $request->file('mat_files');
            if(isset($files)){
                $cont=1;
                foreach ($files as $file){
                    $fullfileName = $file->getClientOriginalName();
                    $OnlyfileName = pathinfo($fullfileName)['filename'];
                    $name = CustomUrl::urlTitle($material['nombre_publicacion'] ).'_'.$material->id.'_'.$cont;
                    $fileName=Archivos::storeImagen($name,$file, 'materiales');
                    $articulo=Articulo::create([
                        'material_id'=>$material['id'],
                        'nombre' =>$fileName   
                    ]);
                    $articulo->save();
                    $cont=$cont+1;
                }
            }
                
                return redirect()->route('app.escritorio.material')->with('status', 'Material creado con éxito');         
            }
        }
        catch (Exception $e){
            $material->delete();
            return redirect()->route('app.escritorio.material')->with('error', 'Material no ha sido registrado');
        }


    }
    public function update(UpdatePost $request, MaterialAprendizaje $material )
    {
        $validatedData = $request->validated();
        $material->update($validatedData);
       
        if(isset($validatedData['imagen_portada'])){
            $name = CustomUrl::urlTitle($material['nombre_publicacion'] ).'_'.$material->id;      
            $imageName = Archivos::storeImagen($name, $material['imagen_portada'], 'materiales');
            $material->imagen_portada = $imageName;
            $material->save();
        }
     
        //eliminar y grabar
        $files= $request->file('mat_files');
        if(isset($files)){
            $cont=1;
            Articulo::where('material_id',$material->id)->delete();
            
            foreach ($files as $file){
               $fullfileName = $file->getClientOriginalName();
                $OnlyfileName = pathinfo($fullfileName)['filename'];
                $name = CustomUrl::urlTitle($material['nombre_publicacion'] ).'_'.$material->id.'_'.$cont;
                $fileName=Archivos::storeImagen($name,$file, 'materiales');
                $articulo=Articulo::create([
                    'material_id'=>$material['id'],
                    'nombre' =>$fileName   
                ]);
                $articulo->save();
                $cont=$cont+1;
            }
        }

        return redirect()->route('app.escritorio.material')->with('status', 'Material modificado con éxito');
        
    }


    public function destroy(MaterialAprendizaje $material) {
        
        //$evento = Evento::findOrfail($id);

        if(Auth::id() != $material->user_id){
            return back()->with('status', 'No ingresaste este material.');
        }
        Articulo::where('material_id',$material->id)->delete();
        $material->delete();
        return redirect()->route('app.escritorio.material')->with('status', 'Material eliminado con éxito');
    }
}
