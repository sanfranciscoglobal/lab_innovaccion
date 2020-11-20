<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use Illuminate\Support\Facades\Storage;
use App\Models\MaterialAprendizaje;
use App\Models\Articulo;
use App\Models\MaterialComentario;
use App\Http\Requests\Materiales\ComentarioPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class MaterialdeaprendizajeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct(){
        $this->middleware('acceso-app:user,admin,superadmin')->except('verListadomateriales','verCategoriasmateriales','verDetalle','comment');
    }


    public function verListadomateriales(Request $request)
    {
        $autentificacion=false;
        if (Auth::check()) {
            // The user is logged in...
            $autentificacion=true;
        }
        MaterialAprendizaje::$paginate = 6;
        $materiales = MaterialAprendizaje::obtenerPaginate();
        //$materiales = MaterialAprendizaje::orderbyDesc('fecha_publicacion')->get();
        return view('aplicacion.materialaprendizaje.verlistado',compact('materiales','autentificacion'));
    }
    public function verDetalle(MaterialAprendizaje $material)
    {

        $comentarios = MaterialComentario::where('material_id',$material->id)->get();
        return view('aplicacion.materialaprendizaje.verdetalle',compact('material','comentarios'));
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
 
    public function edit(MaterialAprendizaje $material)
    {
        
    
        return view('aplicacion.materialaprendizaje.frmMaterial', compact('material'))->with(['url' => route('app.material-de-aprendizaje.put',$material->id),'method'=>'PUT']);
    }
    public function download($articulo)
    {
        return Storage::disk('materiales')->download($articulo);
    }
    public function comment(ComentarioPost $request, MaterialAprendizaje $material) {

        if (Auth::check()) {
            $validatedData=$request->validated();
            if($comentario=MaterialComentario::create($validatedData)){
                $comentario->user_id = auth()->id();
                $comentario->save();
                return redirect()->route('material.detalle',$material->id)->with('status', 'Comentario registrado con éxito');
            }
        }
        else{
            return redirect()->route('home')->with('error', 'Debe registrarse para ingresar un comentario.');
        }
        
            
        
    }

}
