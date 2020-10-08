<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
use App\Models\IniciativaOrigen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IniciativasController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function verIniciativas(Request $request)
//    {
//        return view('aplicacion.iniciativas.iniciativas');
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function iniciativa(Request $request)
    {
        IniciativaOrigen::$paginate = $request->mostrar;
        $iniciativasOrigen = IniciativaOrigen::obtenerIniciativaOrigenPaginate();
        return view('aplicacion.iniciativa.create',compact('iniciativasOrigen'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        dd($request);
        $iniciativasOrigen = IniciativaOrigen::obtenerIniciativaOrigenAll();
        return view('aplicacion.iniciativa.create',compact('iniciativasOrigen'));
    }

}
