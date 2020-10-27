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
        $this->middleware(['auth', 'verified']);
        $this->middleware('acceso-app:user,admin,superadmin')->except('destroy');
        $this->middleware('acceso-app:user,superadmin')->only('destroy');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function store(StorePost $request){
        $validatedData = $request->validated();
        dd($validatedData);

        // if($fondo = Fondo::create($validatedData)){

        //     if(isset($validatedData['imagen'])){
        //         $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
        //         $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'public');
        //         $fondo->imagen = $imageName;
        //         $fondo->save();
        //     }

        //     return redirect()->route('app.home')->with('status', 'Innovación creada con éxito');
        // }
        // return back()->with('error', 'Innovación no creada');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(UpdatePost $request, Fondo $fondo){
        if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->withErrors('No ingresaste este fondo.');
        }

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
        if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('superadmin'))){
            return back()->withErrors('No ingresaste este fondo.');
        }

        $fondo->delete();
        return redirect()->route('app.home')->with('status', 'Fondo eliminado con éxito');
    }
}
