<?php

namespace App\Http\Controllers\Aplicacion;

use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;
use App\Http\Requests\Iniciativa\StorePost;
//use App\Http\Requests\Contacto\StorePost;
//use App\Models\Contacto;
use App\Models\EstadoRegistro;
use App\Models\TipoSector;
//use App\Models\Innovacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Convocatoria;
use App\Models\Problema;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class InnovacionController extends Controller
{
    /**
     * Muestra el formulario de convocatorias (Fase A componente H)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmInnovacionAbiertaIdentificacion(Request $request)
    {
        $convocatoria = new Convocatoria;
        return view('aplicacion.innovacion.create',compact('convocatoria'))->with(['url' => route('app.convocatoria.post'),'method'=>'POST']);
    }

    /**
     * Muestra el formulario de problemas (Fase B componente H)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmGestionInnovacion(Convocatoria $convocatoria)
    {
        $problema = new Problema;
        $tipo = $convocatoria->tipoconvocatoria_id;
        $url = $url2 = $url3 = route("app.problemas.store");
        return view('aplicacion.innovacion.gestion.identificacion.create', compact('convocatoria', 'problema'))->with(['tipo' => $tipo, 'url' => $url, 'url2' => $url2, 'url3' => $url3, 'method' => 'POST']);
    }

    /**
     * Muestra el formulario de problemas para editar (Fase B componente H)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmGestionInnovacionEdit(Convocatoria $convocatoria, Problema $problema)
    {
        // $convocatoria = Convocatoria::find($convocatoria_id);
        if(Auth::id() != $problema->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        $tipo = $convocatoria->tipoconvocatoria_id;
        $url = route("app.problemas.update", [$convocatoria->id, $problema->id]);
        $url2 = route("app.problemas.update.fase2", [$problema->id]);
        $url3 = route("app.problemas.update.fase3", [$problema->id]);
        return view('aplicacion.innovacion.gestion.identificacion.create', compact('convocatoria', 'problema'))->with(['tipo' => $tipo, 'url' => $url, 'url2' => $url2, 'url3' => $url3, 'method' => 'PUT']);
    }

    public function verInnovaciones(Request $request)
    {
        $convocatorias= Convocatoria::all();
        return view('aplicacion.innovacion.vista_convocatoria.innovacionconvocatoria', compact('convocatorias'));
    }


}
