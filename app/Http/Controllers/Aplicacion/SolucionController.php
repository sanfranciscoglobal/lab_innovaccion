<?php

namespace App\Http\Controllers\Aplicacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Convocatoria;
use App\Models\Problema;
use App\Models\Solucion;

class SolucionController extends Controller
{
    //
    public function verSoluciones(Request $request)
    {
       
        return view('aplicacion.innovacion.soluciones.create');
        
    }
    public function frmSolucion(Request $request)
    {
        session()->forget('step');
        $solucion = new Solucion;
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = $url2 = $url3 = route("app.soluciones.store");
        return view('aplicacion.innovacion.soluciones.create', compact('solucion'))->with(['url' => $url, 'url2' => $url2, 'url3' => $url3, 'method' => 'POST']);
    }
    public function frmSolucionEdit(Request $request)
    {
        $solucion = new Solucion;
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = route("app.soluciones.update", [$solucion->id]);
        return view('aplicacion.innovacion.soluciones.create', compact('solucion'))->with([ 'url' => $url, 'method' => 'PUT']);

    }
}
