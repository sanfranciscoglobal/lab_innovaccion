<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FondosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verFondos(Request $request)
    {
        return view('aplicacion.fondos.fondos');
    }
    public function verFormulariofondos(Request $request)
    {
        return view('aplicacion.fondos.frmFondos');
    }

}
