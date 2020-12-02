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
use App\Models\SolucionMejorada;

class SolucionController extends Controller
{
    public function verSoluciones(Problema $problema)
    {
        $soluciones = Solucion::where('problema_id', $problema->id)->where('terminos','1')->paginate(2);
        $c = new Convocatoria;
        $sectores = $c->sectoresName($problema->convocatoria);
        $sectoresArray = '';
        foreach ($sectores as $sector) {
            $sectoresArray .= $sector;
            if ($sector != $sectores->last()) {
                $sectoresArray .= '; ';
            }
        }
        return view('aplicacion.innovacion.soluciones.innovacionSoluciones',compact('soluciones','problema', 'sectoresArray'));
        
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
    public function verSoluciondetalle(Solucion $solucion)
    {
        $solucion_mejorada = $solucion->mejorada ?? new SolucionMejorada;
        $data = [];
        if($solucion->mejorada){
            $data = [
                'method'=> "PUT",
                'path'=> route('app.solucion.mejorada.update', $solucion_mejorada->id),
            ];
        } else {
            $data = [
                'method'=> "POST",
                'path'=> route('app.solucion.mejorada', $solucion->id),
            ];
        }
        $c = new Convocatoria;
        $sectores = $c->sectoresName($solucion->problemaid->convocatoria);
        $sectoresArray = '';
        foreach ($sectores as $sector) {
            $sectoresArray .= $sector;
            if ($sector != $sectores->last()) {
                $sectoresArray .= '; ';
            }
        }
        $avg = $solucion->rating->avg('rating') >= 1 ? $solucion->rating->avg('rating') : 5; 
        $rating = (int)round($avg, 0);
        $comentarios = $solucion->comentarios->sortByDesc('created_at')->slice(0, 3);
        return view('aplicacion.innovacion.soluciones.Soluciondetallada',compact('solucion', 'rating', 'comentarios', 'solucion_mejorada', 'sectoresArray'))->with($data);
    }

    
}
