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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmInnovacionAbiertaIdentificacion(Request $request)
    {
        $convocatoria = new Convocatoria;
        return view('aplicacion.innovacion.create',compact('convocatoria'))->with(['url' => route('app.convocatoria.post'),'method'=>'POST']);
    }
  
    public function frmGestionInnocavion(Request $request)
    {
        // Pasar el tipo de innovación para cargar el template correspondiente
        /*
         * 1. Abierta
         * 2. Social
         * 3. Publica
         */
        $innovacion = 3;
        return view('aplicacion.innovacion.gestion.identificacion.create')->with(array('tipo' => $innovacion));
    }
}
