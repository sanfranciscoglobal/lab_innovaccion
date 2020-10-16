<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\MaterialAprendizaje;
use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class MaterialdeaprendizajeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct(){
        $this->middleware('auth');
    }
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
    public function showForm(Request $request)
    {
        $material = new MaterialAprendizaje;
        return view('aplicacion.materialaprendizaje.frmMaterial', compact('material'))->with(['url' => route('app.material-de-aprendizaje.post'),'method'=>'POST']);
        
    }
 
    public function edit($id)
    {
        
        $material = MaterialAprendizaje::find($id);
        $articulos=Articulo::where('material_id',$material->id)->get();
        return view('aplicacion.materialaprendizaje.frmMaterial', compact('material','articulos'))->with(['url' => route('app.material-de-aprendizaje.put',$material->id),'method'=>'PUT']);
    }

}
