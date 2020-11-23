<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Evento;
use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Convocatoria;
use App\Models\MaterialAprendizaje;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(Request $request)
    {
        $eventos = Evento::obtenerEventosCount();
        $publicaciones = MaterialAprendizaje::obtenerPublicacionesCount();
        $iniciativas = Iniciativas::obtenerIniciativasCount();
        $convocatorias = Convocatoria::obtenerConvocatoriaCount();
        $usuarios = User::obtenerUsuariosLimit(10);
        $ods = OdsCategoria::obtenerOdsCategoriaAll();

        return view('backend.escritorio.dashboard', compact('eventos', 'publicaciones', 'iniciativas', 'convocatorias', 'usuarios','ods'));
    }

    // public function verEscritorio(Request $request)
    // {
    //     return view('backend.escritorio._content_escritorio');
    // }

    public function verConvocatoria(Request $request)
    {

        Convocatoria::$own = true;
        $convocatorias = Convocatoria::obtenerPaginate();
        
        return view('backend.escritorio.convocatoriavista',compact('convocatorias'));
    }

}
