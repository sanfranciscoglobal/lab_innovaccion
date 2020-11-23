<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
use App\Models\Fondo;
use App\Models\Evento;
use App\Models\MaterialAprendizaje;
use App\Models\Problema;
use App\Models\Solucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EscritorioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verEscritorio(Request $request)
    {
        return view('aplicacion.escritorio._content_escritorio');
    }

    /**
     * Muestra los fondos creados del usuario
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verFondos(Request $request)
    {
        Fondo::$own = true;
        // Fondo::$paginate = 2;
        $fondos = Fondo::obtenerPaginate();
        return view('aplicacion.escritorio.contenidofondos', compact('fondos'));
    }

    public function verEventos(Request $request)
    {
        //Evento::$paginate = 2;
        Evento::$own = true;
        $eventos = Evento::obtenerPaginate();
        return view('aplicacion.escritorio.contenidoeventos',compact('eventos'));

    }

    public function verMateriales(Request $request)
    {
        MaterialAprendizaje::$own = true;
        //MaterialAprendizaje::$paginate = 2;
        $materiales = MaterialAprendizaje::obtenerPaginate();

        return view('aplicacion.escritorio.contenidomateriales',compact('materiales'));
    }

    /**
     * Muestra los fondos creados del usuario
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verProblemas(Request $request){
        Problema::$own = true;
        // Problema::$paginate = 2;
        $problemas = Problema::obtenerPaginate();
        return view('aplicacion.escritorio.contenidoproblemas', compact('problemas'));

    }
    public function verSoluciones(Request $request){
        Solucion::$own = true;
        // Problema::$paginate = 2;
        $soluciones = Solucion::obtenerPaginate();
        return view('aplicacion.escritorio.contenidosoluciones', compact('soluciones'));

    }
}
