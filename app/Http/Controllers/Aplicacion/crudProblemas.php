<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk

// Modelos
use App\Models\Problema;

// Reglas de validacion
use App\Http\Requests\Problema\Store1Post;
use App\Http\Requests\Problema\Store2Post;
use App\Http\Requests\Problema\Store3Post;
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
    public function store(Store1Post $request){
        // dd($request->get('continue'));
        $validatedData = $request->validated();

        if($problema = Problema::create($validatedData)){
            $problema->user_id = auth()->id();
            $problema->save();

            if(isset($validatedData['archivo'])){
                // $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.;
                $imageName = Archivos::storeImagen($problema->id, $validatedData['archivo'], 'problemas');
                $problema->archivo = $imageName;
                $problema->save();
            }
            if($request->get('continue')){
                $request->session()->put('step', '2');
                return redirect()->route('app.problemas.edit', [$problema->convocatoria_id, $problema->id])->with(['status' => 'Innovación problema creada con éxito', 'method' => 'PUT']);
            } else {
                return redirect()->route('app.escritorio')->with(['status' => 'Innovación problema creada con éxito']);
            }
            
        }
        return back()->with('error', 'Innovación problema no creada');
    }

    /**
     * Actualiza un problema (fase B componente H)
     * @param StorePost $request
     * @param Problema $problema
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(UpdatePost $request, Problema $problema){
        // dd($request->validated());
        if(Auth::id() != $problema->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        $validatedData = $request->validated();
        $problema->update($request->validated());

        if(isset($validatedData['imagen'])){
            $imageName = Archivos::storeImagen($problema->id, $validatedData['imagen'], 'public');
            $problema->archivo = $imageName;
            $problema->save();
        }

        if($request->get('continue')){
            $request->session()->put('step', '2');
            return redirect()->route('app.problemas.edit', [$problema->convocatoria_id, $problema->id])->with(['status' => 'Innovación problema modificado con éxito', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Innovación problema modificado con éxito']);
        }

        return back()->with('error', 'Innovación problema no actualizada');
    }

    /**
     * Actualiza un problema (fase B componente H)
     * @param StorePost $request
     * @param Problema $problema
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function updateFase2(Store2Post $request, Problema $problema){
        // dd($problema->archivo);
        if(Auth::id() != $problema->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este problema.');
        }
        
        $validatedData = $request->validated();
        $problema->causas = json_encode($validatedData['causas']);
        $problema->efectos = json_encode($validatedData['efectos']);
        $problema->eslabon = $validatedData['eslabon'] ?? null;
        $problema->grupo_social = $validatedData['grupo_social'] ?? null;
        $problema->descripcion_grupo = $validatedData['descripcion_grupo'];
        $problema->keyword = json_encode($validatedData['keyword']);
        $problema->save();

        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.problemas.edit', [$problema->convocatoria_id, $problema->id])->with(['status' => 'Innovación problema modificado con éxito', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Innovación problema modificado con éxito']);
        }

        return back()->with('error', 'Innovación problema no modificado.');
    }

    public function updateFase3(Store3Post $request, Problema $problema){
        // dd($request);
        if(Auth::id() != $problema->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        $validatedData = $request->validated();
        $problema->update($request->validated());

        if(isset($validatedData['imagen'])){
            $imageName = Archivos::storeImagen($problema->id, $validatedData['imagen'], 'public');
            $problema->imagen = $imageName;
            $problema->save();
        }
        
        $request->session()->forget('step', '3');

        // return redirect()->route('home')->with('status', 'Problema modificado con éxito');
        return redirect()->route('innovaciongestion.ver',$problema->tipo_convocatoria_id)->with('status', 'Problema modificado con éxito');
        
    }

    /**
     * Elimina un problema (fase B componente H)
     * @param  \App\Models\Problema $Problema->id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problema $problema) {
        // dd($problema->id);
        if(Auth::id() != $problema->user_id && (!Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        $problema->delete();
        return redirect()->route('home')->with('status', 'Problema eliminado con éxito.');
    }

    public function download($archivo)
    {
        return Storage::disk('problemas')->download($archivo);
    }
}
