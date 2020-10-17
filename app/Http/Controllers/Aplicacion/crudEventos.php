<?php

namespace App\Http\Controllers\Aplicacion;
use App\Models\Evento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Eventos\StorePost;
use App\Http\Requests\Eventos\UpdatePost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Canton;
// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk


class crudEventos extends Controller
{
    //
    public function __construct(){
        $this->middleware(['auth', 'acceso-app:user']);
    }
    public function store(StorePost $request)
    {
        $validatedData=$request->validated();
        
        if($evento=Evento::create($validatedData)){

            if(isset($validatedData['imagen'])){
                $name = CustomUrl::urlTitle($validatedData['organizador']).'_'.$evento->id;
                $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
                $evento->imagen = $imageName;
                $evento->save();
            }
            return redirect()->route('app.home')->with('status', 'Evento creado con éxito');

        }

        return back()->with('error', 'Evento no creado');
    }

    public function update(UpdatePost $request, Evento $evento )
    {
     
        $validatedData = $request->validated();
        
        $evento->update( $validatedData);

        if(isset($validatedData['imagen'])){
            
            $name = CustomUrl::urlTitle($validatedData['organizador']).'_'.$evento->id;
            $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
            $evento->imagen = $imageName;
            $evento->save();
        }

        return redirect()->route('app.home')->with('status', 'Evento modificado con éxito');
       

    }


    public function destroy(Evento $evento) {


        if(Auth::id() != $evento->user_id){
            return back()->with('status', 'No ingresaste este evento.');
        }

        $evento->delete();
        return redirect()->route('app.home')->with('status', 'Evento eliminado con éxito');
    }

}


