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
use App\Models\Problema;

// Reglas de validacion
use App\Http\Requests\Problema\StorePost;
use App\Http\Requests\Problema\UpdatePost;

class crudProblemas extends Controller
{
    public function __construct(){
        // $this->middleware('acceso-app:user,admin,superadmin')->except('destroy');
        // $this->middleware('acceso-app:user,superadmin')->only('destroy');
    }

    /**
     * Almacena un problema (fase B componente H)
     * @param StorePost $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function store(StorePost $request){
        dd($request);
        $validatedData = $request->validated();

        // if($fondo = Fondo::create($validatedData)){

        //     if(isset($validatedData['imagen'])){
        //         $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
        //         $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
        //         $fondo->imagen = $imageName;
        //         $fondo->save();
        //     }

        //     return redirect()->route('home')->with('status', 'Innovación creada con éxito');
        // }
        // return back()->with('error', 'Innovación no creada');
    }

    /**
     * Actualiza un problema (fase B componente H)
     * @param StorePost $request
     * @param Problema $problema
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(UpdatePost $request, Problema $problema){
        // if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
        //     return back()->with('error', 'No ingresaste este fondo.');
        // }

        // $validatedData = $request->validated();
        // $fondo->update($request->validated());

        // if(isset($validatedData['imagen'])){
        //     $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
        //     $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
        //     $fondo->imagen = $imageName;
        //     $fondo->save();
        // }

        // return redirect()->route('home')->with('status', 'Fondo modificado con éxito');
    }

    /**
     * Elimina un problema (fase B componente H)
     * @param  \App\Models\Problema $Problema->id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problema $problema) {
        // if(Auth::id() != $convocatoria->user_id && (!Auth::user()->hasRole('superadmin'))){
        //     return back()->with('error', 'No ingresaste este fondo.');
        // }

        // $convocatoria->delete();
        // return redirect()->route('home')->with('status', 'Fondo eliminado con éxito');
    }
}
