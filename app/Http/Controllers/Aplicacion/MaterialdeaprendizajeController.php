<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MaterialdeaprendizajeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verMaterialdeaprendizaje(Request $request)
    {
        return view('aplicacion.materialaprendizaje.vermaterialaprendizaje');
    }
    public function verFormularioregistromaterial(Request $request)
    {
        return view('aplicacion.materialaprendizaje.frmMaterial');
    }

}
