<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Modelos
use App\Models\Fondo;

// Reglas de validacion
use App\Http\Requests\Fondo\StorePost;

class crudFondos extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function store(Request $request){
        $requestData = $request->validated();
        $validator = Validator::make($requestData, StorePost::rules());
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($fondo = Fondo::create($requestData)){
            if($requestData->imagen != null){
                $extension = $requestData->imagen->extension();
                $name = CustomUrl::slugify($requestData->organizacion).'_'.$id.'_'.date('Ymd').'_'.date('His');
                $imageName = $name.'.'.$requestData->imagen->extension();
                $fondo->image = $imageName;
                $fondo->save();

                /**
                 * GUARDAR IMAGEN EN SERVIDOR
                 */

                $filename = "{$name}.{$extension}";
                $path = ProcessImageSmall::returnPathImage();
                try{
                    $requestData->imagen->move($path, $filename);
                } catch (Exception $e) {
                    return redirect()->back()->withErrors('No hemos podido guardar tu imagen.');
                }

                ProcessImageSmall::dispatch($name, $extension, $path);
            }

            return redirect()->route('home')->with('status', 'Fondo creado con éxito');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(Request $request, Fondo $id){
        $requestData = $requestData->validated();
        $validator = Validator::make($requestData, StorePost::rules());
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($requestData->imagen != null){
            $extension = $requestData->imagen->extension();
            $name = CustomUrl::slugify($requestData->organizacion).'_'.$id.'_'.date('Ymd').'_'.date('His');
            $imageName = $name.'.'.$requestData->imagen->extension();

            /**
             * GUARDAR IMAGEN EN SERVIDOR
             */

            $filename = "{$name}.{$extension}";
            $path = ProcessImageSmall::returnPathImage();
            try{
                $requestData->imagen->move($path, $filename);
            } catch (Exception $e) {
                return redirect()->back()->withErrors('No hemos podido guardar tu imagen.');
            }

            ProcessImageSmall::dispatch($name, $extension, $path);
        }

        $Fondo = Fondo::find($id);
        $Fondo->fuente = $requestData->fuente;
        $Fondo->organizacion = $requestData->organizacion;
        $Fondo->nombre_fondo = $requestData->nombre_fondo;
        $Fondo->info = $requestData->info;
        $Fondo->fecha_inicio = $requestData->fecha_inicio;
        $Fondo->fecha_fin = $requestData->fecha_fin;
        $Fondo->facebook = $requestData->facebook;
        $Fondo->instagram = $requestData->instagram;
        $Fondo->youtube = $requestData->youtube;
        $Fondo->linkedin = $requestData->linkedin;
        $Fondo->twitter = $requestData->twitter;
        $Fondo->imagen = $imageName;
        $Fondo->terminos = $requestData->terminos;
        $Fondo->save();

        return redirect()->route('home')->with('status', 'Fondo modificado con éxito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Fondo $fondo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $fondo = Fondo::find($id);

        if(Auth::check()){
            if(Auth::id() != $fondo->user_id){
                return back()->with('status', 'No ingresaste este fondo.');
            }
        } else {
            return back()->with('status', 'No encontramos un usuario autenticado.');
        }

        $fondo->delete();
        return redirect()->route('mis-necesidades')->with('status', 'Fondo eliminado con éxito');
    }
}
