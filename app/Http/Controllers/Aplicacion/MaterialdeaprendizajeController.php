<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use Illuminate\Support\Facades\Storage;
use App\Models\MaterialAprendizaje;
use App\Models\Articulo;
use App\Models\MaterialComentario;
use App\Models\MaterialCategorias;
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
        $this->middleware('acceso-app:user,admin,superadmin')->except('verListadomateriales','searchMaterialesbuscador','verCategoriasmateriales','verDetalle','comment','searchMateriales','searchMaterialescategoria');
    }


    public function verListadomateriales(Request $request)
    {
    
        MaterialAprendizaje::$paginate = 6;
        $materiales = MaterialAprendizaje::obtenerPaginate();
        $categorias=MaterialCategorias::orderby('nombre')->get();
        //$materiales = MaterialAprendizaje::orderbyDesc('fecha_publicacion')->get();
        return view('aplicacion.materialaprendizaje.verlistado',compact('materiales','categorias'));
    }
    public function verDetalle(MaterialAprendizaje $material)
    {
        $categorias=MaterialCategorias::orderby('nombre')->get();
        $comentarios = MaterialComentario::where('material_id',$material->id)->get();
        return view('aplicacion.materialaprendizaje.verdetalle',compact('material','comentarios','categorias'));
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
            return redirect()->route('home')->with('error', 'Debe iniciar sesión para ingresar un comentario.');
        }
        
            
        
    }
    public function searchMateriales($tipo)
    {
        $categorias=MaterialCategorias::orderby('nombre')->get();
        $materiales = MaterialAprendizaje::where('tipo',$tipo)->orderbyDesc('created_at')->paginate(MaterialAprendizaje::$paginate);

        return view('aplicacion.materialaprendizaje.verlistado',compact('materiales','categorias'));
    }
    public function searchMaterialescategoria($categoria)
    {
        $categorias=MaterialCategorias::orderby('nombre')->get();
        $materiales = MaterialAprendizaje::where('tema_tratado',$categoria)->orderbyDesc('created_at')->paginate(MaterialAprendizaje::$paginate);

        return view('aplicacion.materialaprendizaje.verlistado',compact('materiales','categorias'));
    }
    public function searchMaterialesbuscador(Request $request)
    {
        $categorias=MaterialCategorias::orderby('nombre')->get();
        $materiales = MaterialAprendizaje::where('nombre_publicacion', 'ilike', '%' . $request->buscador . '%')->orderbyDesc('created_at')->paginate(MaterialAprendizaje::$paginate);

        return view('aplicacion.materialaprendizaje.verlistado',compact('materiales','categorias'));
    }

}
