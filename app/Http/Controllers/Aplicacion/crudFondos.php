<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk

// Modelos
use App\Models\Fondo;

// Reglas de validacion
use App\Http\Requests\Fondo\StorePost;
use App\Http\Requests\Fondo\UpdatePost;

class crudFondos extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'acceso-app:user']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function store(StorePost $request){
        $validatedData = $request->validated();
        if($fondo = Fondo::create($validatedData)){
            if(isset($validatedData['imagen'])){
                $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
                $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
                $fondo->imagen = $imageName;
                $fondo->save();
            }

            return redirect()->route('app.home')->with('status', 'Fondo creado con éxito');
        }
        return back()->with('error', 'Fondo no creado');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(UpdatePost $request, Fondo $fondo){
        $validatedData = $request->validated();
        $fondo->update($request->validated());

        if(isset($validatedData['imagen'])){
            $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
            $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
            $fondo->imagen = $imageName;
            $fondo->save();
        }

        return redirect()->route('app.home')->with('status', 'Fondo modificado con éxito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Fondo $fondo->id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fondo $fondo) {
        // if(Auth::check()){
        //     if(Auth::id() != $fondo->user_id){
        //         return back()->with('status', 'No ingresaste este fondo.');
        //     }
        // } else {
        //     return back()->with('status', 'No encontramos un usuario autenticado.');
        // }

        $fondo->delete();
        return redirect()->route('app.home')->with('status', 'Fondo eliminado con éxito');
    }
}
