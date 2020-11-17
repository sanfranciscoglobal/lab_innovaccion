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
use App\Models\Solucion;
use App\Models\Soluciontipoinnova;

// Reglas de validacion
use App\Http\Requests\Solucion\Store1Post;
use App\Http\Requests\Solucion\Store2Post;
use App\Http\Requests\Solucion\Store3Post;
class crudSoluciones extends Controller
{
    //
    public function store(Store1Post $request){
        $validatedData = $request->validated();
        if($request->get('continue')){
            $request->session()->put('step', '2');
            return redirect()->route('app.soluciones.edit')->with(['status' => 'Innovación solución creada con éxito', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Innovación solución creada con éxito']);
        }
        // if($solucion = Solucion::create($validatedData)){
        //     $solucion->user_id = auth()->id();
        //     //$solucion->save();
        //     $request->session()->put('step', '2');
        //     return redirect()->route('app.soluciones.store')->with(['status' => 'Innovación problema creada con éxito', 'method' => 'PUT']);
            
        // }
        // return ('valio verga');
       
    }
    public function update(Request $request){
        if($request->get('continue')){
            $request->session()->put('step', '2');
            return redirect()->route('app.soluciones.edit')->with(['status' => 'Innovación fase 1', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Innovación fase 1']);
        }

    }
    public function updateFase2(Store2Post $request){
        dd($request->all());
        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.soluciones.edit')->with(['status' => 'Innovación fase 2', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Innovación fase 2']);
        }

    }
    public function updateFase3(Request $request){
        dd($request->all());
        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.soluciones.edit')->with(['status' => 'Innovación solución creada con éxito', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Innovación solución creada con éxito']);
        }

    }
}
