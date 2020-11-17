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
    public function verSoluciones(Request $request)
    {
       
        return view('aplicacion.innovacion.soluciones.create');
        
    }
    public function frmSolucion(Problema $problema)
    {
        session()->forget('step');
        $solucion = new Solucion;
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = $url1 = $url2 = route("app.soluciones.store");
        return view('aplicacion.innovacion.soluciones.create', compact('solucion','problema'))->with(['url' => $url, 'url1' => $url1, 'url2' => $url2, 'method' => 'POST']);
    }
    public function frmSolucionEdit(Request $request)
    {
        $solucion = new Solucion;
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = route("app.soluciones.update", [$solucion->id]);
        $url1 = route("app.soluciones.update.fase2", [$solucion->id]);
        $url2 = route("app.soluciones.update.fase3", [$solucion->id]);
        return view('aplicacion.innovacion.soluciones.create', compact('solucion'))->with([ 'url' => $url, 'url1' => $url1,'url2' => $url2,'method' => 'PUT']);

    }
}
