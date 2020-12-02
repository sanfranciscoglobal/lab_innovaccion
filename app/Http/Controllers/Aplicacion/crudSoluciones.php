<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk
use App\Mail\SolucionEmail;
use App\Mail\Feedback;

// Modelos
use App\Models\Solucion;
use App\Models\Soluciontipoinnova;
use App\Models\SolucionObservacion;
use App\Models\SolucionRating;
use App\Models\SolucionComentario;
use App\Models\SolucionMejorada;

// Reglas de validacion
use App\Http\Requests\Solucion\Store1Post;
use App\Http\Requests\Solucion\Store2Post;
use App\Http\Requests\Solucion\Store3Post;
use App\Http\Requests\Solucion\UpdatePost;
use App\Http\Requests\Solucion\ObservacionPost;
use App\Http\Requests\Solucion\StoreMejorada;
class crudSoluciones extends Controller
{
    //
    public function store(Store1Post $request){
   
        $validatedData = $request->validated();
        if($solucion=Solucion::create($validatedData)){
            $solucion->user_id = auth()->id();
            $solucion->save();
            if(isset($validatedData['archivo'])){
                $imageName = Archivos::storeImagen($solucion->id, $validatedData['archivo'], 'soluciones');
                $solucion->archivo = $imageName;
                $solucion->save();
            }
            Mail::to($solucion->problemaid->user->email)->send(new SolucionEmail($solucion));
            if($request->get('continue')){
                $request->session()->put('step', '2');
                return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Solución fase 1 completada con éxito, continue con el siguiente paso.', 'method' => 'PUT']);
            } else {
                return redirect()->route('app.escritorio')->with(['status' => 'Solución fase 1 completada con éxito, recuerda de completarla más tarde.']);
            }

        }
        return back()->with('error', 'Solución no fue creada');
       
    }
    public function update(UpdatePost $request,Solucion $solucion){
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }
        $validatedData = $request->validated();
        $solucion->update($validatedData);
        if(isset($validatedData['archivo'])){
            $imageName = Archivos::storeImagen($solucion->id, $validatedData['archivo'], 'soluciones');
            $solucion->archivo = $imageName;
            $solucion->save();
        }

        if($request->get('continue')){
            $request->session()->put('step', '2');
            return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Solución fase 1 completada con éxito', 'method' => 'PUT']);
        } else {
            return back()->with(['status' => 'Solución fase 1 completada con éxito, no se olvide de completarla más tarde']);
        }

    }
    public function updateFase2(Store2Post $request,Solucion $solucion){
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }
        $validatedData = $request->validated();
        $solucion->update($validatedData);
        Soluciontipoinnova::where('solucion_id',$solucion->id)->delete();
        foreach ($validatedData['tipo_institucion'] as $propuesta){
            $conpropuesta=Soluciontipoinnova::create([
                'solucion_id'=>$solucion['id'],
                'tipoinnovacion_id' =>$propuesta
            ]);
            $conpropuesta->save();
        }

        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Solución fase 2 completada con éxito, continue con el último paso', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Solución fase 2 completada con éxito, no se olvide de completarla más tarde']);
        }

    }
    public function updateFase3(Store3Post $request,Solucion $solucion){
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }
        $validatedData = $request->validated();
        $solucion->update($validatedData);
        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Innovación solución creada con éxito', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Solución fase 3 completada con éxito, se ha registrado su solucón exitosamente']);
        }

    }

    public function destroy(Solucion $solucion) {
        // dd($problema->id);
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }

        $solucion->delete();
        Soluciontipoinnova::where('solucion_id',$solucion->id)->delete();
        return redirect()->route('home')->with('status', 'Solución eliminada con éxito.');
    }

    public function observacioncrear(ObservacionPost $request) {

        $validatedData = $request->validated();
        if($observacion = SolucionObservacion::create($validatedData)){
            Mail::to($observacion->solucionid->user->email)->send(new Feedback($observacion));
            return back()->with('status', 'Observación creada con éxito.' );
        }
    }
        
    /**
     * Guarda el rating de una solucion
     * @param StoreMejorada $request
     * @param App\Models\Solucion $solucion
     * @return Response
     */
    public function mejorada(StoreMejorada $request, Solucion $solucion) {
        $validatedData = $request->validated();
        // dd($validatedData);
        $validatedData['solucion_id'] = $solucion->id;

        $solucion = SolucionMejorada::create($validatedData);
        if(isset($validatedData['archivo'])){
            $imageName = Archivos::storeImagen($solucion->id, $validatedData['archivo'], 'soluciones');
            $solucion->archivo = $imageName;
            $solucion->save();
        }

        return redirect()->back()->with('status', 'Solucion mejorada guardada con éxito.');
    }
        
    /**
     * Guarda el rating de una solucion
     * @param StoreMejorada $request
     * @param App\Models\SolucionMejorada $solucion
     * @return Response
     */
    public function mejoradaUpdate(StoreMejorada $request, SolucionMejorada $solucion_mejorada) {
        $validatedData = $request->validated();
        // dd($validatedData);

        $solucion_mejorada->update($validatedData);
        if(isset($validatedData['archivo'])){
            $imageName = Archivos::storeImagen($solucion_mejorada->id, $validatedData['archivo'], 'soluciones');
            $solucion_mejorada->archivo = $imageName;
            $solucion_mejorada->save();
        }

        return redirect()->back()->with('status', 'Solucion mejorada modificada con éxito.');
    }

    /**
     * Guarda el rating de una solucion
     * @param Request $request
     * @param App\Models\Solucion $solucion
     * @return Response
     */
    public function rating(Request $request, Solucion $solucion) {
        // dd($request->value);

        SolucionRating::create([
            'rating' => (int)$request->value, 'solucion_id' => $solucion->id, 'user_id' => auth()->id()
        ]);
        return redirect()->back()->with('status', 'Rating guardado con éxito.');
    }

    /**
     * Guarda el rating de una solucion
     * @param Request $request
     * @param App\Models\Solucion $solucion
     * @return Response
     */
    public function comentario(Request $request, Solucion $solucion) {
        // dd($request);

        SolucionComentario::create([
            'comentario' => $request->comentario, 'solucion_id' => $solucion->id, 'user_id' => auth()->id()
        ]);
        return redirect()->back()->with('status', 'Comentario guardado con éxito.');
    }
}
