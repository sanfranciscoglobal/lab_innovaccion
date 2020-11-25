<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


use App\Models\Fondo;
use App\Models\EstadoRegistro;
use App\Models\IniciativaActor;
use App\Models\IniciativaContacto;
use App\Models\IniciativaInformacion;
use App\Models\IniciativaInstitucion;
use App\Models\IniciativaOds;
use App\Models\IniciativaOrigen;
use App\Models\IniciativaPoblacion;
use App\Models\Iniciativas;
use App\Models\IniciativaUbicacion;
use App\Models\MaterialAprendizaje;
use App\Models\Convocatoria;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(Request $request)
    {
        
        $fondos = Fondo::latest()->first() ?? [];
        //$fondos->updated_at->format('Y-m-d H:i:s');
        //Iniciativas::$paginate = 1;
        $iniciativas = Iniciativas::latest()->first() ?? [];
        // $iniciativaInfo = $iniciativas->iniciativaInformacion ?? [];
        // $iniciativaAutor = $iniciativas->iniciativaActor ?? [];
        // $iniciativaDate = $iniciativas->updated_at->format('Y-m-d') ?? [];
        // $iniciativaDate = date('Y-m-d');
        $convocatoria = Convocatoria::latest()->first() ?? [];
        // $convocatoria->tipoconvocatoriaid ?? [];
        // $convocatoria->user ?? [];
        $materiales = MaterialAprendizaje::latest()->first() ?? [];
        
        //return compact('fondos','materiales','convocatoria','iniciativaDate','iniciativaInfo','iniciativaAutor');
        // return view('aplicacion.home.home',compact('fondos','convocatoria','iniciativaDate','iniciativaInfo','iniciativaAutor','materiales'));
        return view('aplicacion.home.home',compact('fondos', 'convocatoria', 'iniciativaS', 'materiales'));
    }
    public function contacto(Request $request)
    {
        $contacto = new Contacto();
        return view('aplicacion.contact.index', compact('contacto'));
    }

    public function store(StorePost $request)
    {
        $requestData = $request->validated();
        $validator = Validator::make($requestData, StorePost::myRules());

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($model = Contacto::create($requestData)) {
            return back()->with('status', 'Contacto enviado con exito');
        }
    }

}
