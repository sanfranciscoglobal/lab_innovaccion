<?php

namespace App\Http\Controllers\Aplicacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Convocatoria;
use App\Models\Problema;
use App\Models\Solucion;

class SolucionController extends Controller
{
    public function verSoluciones(Problema $problema)
    {
        $soluciones = Solucion::where('problema_id', $problema->id)->where('terminos','1')->get();
        return view('aplicacion.innovacion.soluciones.innovacionSoluciones',compact('soluciones','problema'));
        
    }
    public function frmSolucion(Problema $problema)
    {
        session()->forget('step');
        $solucion = new Solucion;
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = $url1 = $url2 = route("app.soluciones.store");
        return view('aplicacion.innovacion.soluciones.create', compact('solucion','problema'))->with(['url' => $url, 'url1' => $url1, 'url2' => $url2, 'method' => 'POST']);
    }
    public function frmSolucionEdit(Problema $problema,Solucion $solucion )
    {
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = route("app.soluciones.update", [$solucion->id]);
        $url1 = route("app.soluciones.update.fase2", [$solucion->id]);
        $url2 = route("app.soluciones.update.fase3", [$solucion->id]);
        return view('aplicacion.innovacion.soluciones.create', compact('solucion', 'problema'))->with([ 'url' => $url, 'url1' => $url1,'url2' => $url2,'method' => 'PUT']);

    }
    public function download($solucion)
    {
        return Storage::disk('soluciones')->download($solucion);
    }
}
