<?php

namespace App\Http\Controllers\Aplicacion;

use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
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
    public function frmGestionInnocavion(Convocatoria $convocatoria)
    {
       
        $tipo = $convocatoria->tipoconvocatoria_id;
        return view('aplicacion.innovacion.gestion.identificacion.create', compact('convocatoria'))->with('tipo', $tipo);
    }

    public function verInnovaciones(Request $request)
    {
        $convocatorias= Convocatoria::all();
        return view('aplicacion.innovacion.vista_convocatoria.innovacionconvocatoria', compact('convocatorias'));
    }


}
