<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
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
    public function verIniciativas(Request $request)
    {
        return view('aplicacion.iniciativas.iniciativas');
    }
    public function verFormularioiniciativas(Request $request)
    {
        return view('aplicacion.iniciativas.frmIniciativas');
    }

}
