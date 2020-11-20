<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Convocatoria;
use App\Models\MaterialAprendizaje;
use Illuminate\Support\Facades\Validator;

class EscritorioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function escritorio(Request $request)
    {
        return view('backend.escritorio.dashboard');
    }
    // public function verEscritorio(Request $request)
    // {
    //     return view('backend.escritorio._content_escritorio');
    // }

    public function verConvocatoria(Request $request)
    {
        
        $convocatorias = Convocatoria::all();
        return view('backend.escritorio.convocatoriavista', compact('convocatorias'));

    }

}
