<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Modelos
use App\Models\Fondo;

// Reglas de validacion
use App\Http\Requests\Fondo\StorePost;

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

        $fondo = Fondo::create($request);
        // if($fondo = Fondo::create($request)){
        //     if($request->imagen != null){
        //         $extension = $request->imagen->extension();
        //         $name = CustomUrl::slugify($request->organizacion).'_'.$id.'_'.date('Ymd').'_'.date('His');
        //         $imageName = $name.'.'.$request->imagen->extension();
        //         $fondo->image = $imageName;
        //         $fondo->save();

        //         /**
        //          * GUARDAR IMAGEN EN SERVIDOR
        //          */

        //         $filename = "{$name}.{$extension}";
        //         $path = ProcessImageSmall::returnPathImage();
        //         try{
        //             $request->imagen->move($path, $filename);
        //         } catch (Exception $e) {
        //             return redirect()->back()->withErrors('No hemos podido guardar tu imagen.');
        //         }

        //         ProcessImageSmall::dispatch($name, $extension, $path);
        //     }

        //     return redirect()->route('home')->with('status', 'Fondo creado con éxito');
        // }
        return redirect()->route('home')->with('status', 'Fondo creado con éxito');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(StorePost $request, $id){

        // if($request->imagen != null){
        //     $extension = $request->imagen->extension();
        //     $name = CustomUrl::slugify($request->organizacion).'_'.$id.'_'.date('Ymd').'_'.date('His');
        //     $imageName = $name.'.'.$request->imagen->extension();

        //     /**
        //      * GUARDAR IMAGEN EN SERVIDOR
        //      */

        //     $filename = "{$name}.{$extension}";
        //     $path = ProcessImageSmall::returnPathImage();
        //     try{
        //         $request->imagen->move($path, $filename);
        //     } catch (Exception $e) {
        //         return redirect()->back()->withErrors('No hemos podido guardar tu imagen.');
        //     }

        //     ProcessImageSmall::dispatch($name, $extension, $path);
        // }

        // $Fondo = Fondo::find($id);
        // $Fondo->fuente = $request->fuente;
        // $Fondo->organizacion = $request->organizacion;
        // $Fondo->nombre_fondo = $request->nombre_fondo;
        // $Fondo->info = $request->info;
        // $Fondo->fecha_inicio = $request->fecha_inicio;
        // $Fondo->fecha_fin = $request->fecha_fin;
        // $Fondo->facebook = $request->facebook;
        // $Fondo->instagram = $request->instagram;
        // $Fondo->youtube = $request->youtube;
        // $Fondo->linkedin = $request->linkedin;
        // $Fondo->twitter = $request->twitter;
        // $Fondo->imagen = $imageName;
        // $Fondo->terminos = $request->terminos;
        // $Fondo->save();

        // return redirect()->route('home')->with('status', 'Fondo modificado con éxito');
        return response()->json('ok', 200);
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
        return redirect()->route('mis-necesidades')->with('status', 'Fondo eliminado con éxito');
    }
}
