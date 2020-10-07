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
    public function verListadomateriales(Request $request)
    {
        return view('aplicacion.materialaprendizaje.verlistado');
    }
    public function verCategoriasmateriales(Request $request)
    {
        return view('aplicacion.materialaprendizaje.vercategorias');
    }
    public function verDetallematerial(Request $request)
    {
        return view('aplicacion.materialaprendizaje.verdetalle');
    }
    public function verFormularioregistromaterial(Request $request)
    {
        return view('aplicacion.materialaprendizaje.frmMaterial');
    }

}
