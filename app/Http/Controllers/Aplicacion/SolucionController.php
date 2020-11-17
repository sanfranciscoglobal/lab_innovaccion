<?php

namespace App\Http\Controllers\Aplicacion;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SolucionController extends Controller
{
    public function verSoluciones(Request $request)
    {
       
        return view('aplicacion.innovacion.soluciones.create');
    }
}
