<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MaterialAprendizaje;
use Illuminate\Http\Request;

class MaterialAprendizajeController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session()->forget('admin');
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialAprendizajes = MaterialAprendizaje::obtenerMaterialAprendizajesWithTrashedAll();
        return view('backend.material_aprendizaje.index', compact('materialAprendizajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialAprendizaje  $materialAprendizaje
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialAprendizaje $materialAprendizaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialAprendizaje  $materialAprendizaje
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialAprendizaje $materialAprendizaje)
    {
        session()->put('admin', 'admin.material-aprendizaje.index');
        return redirect()->route('app.material-de-aprendizaje.edit', $materialAprendizaje->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialAprendizaje  $materialAprendizaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialAprendizaje $materialAprendizaje)
    {
        //
    }

    /**
     * Activar the specified resource in storage.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function activar($id)
    {
        if (MaterialAprendizaje::obtenerMaterialAprendizajeWithTrashedRestore($id)) {
            return back()->with('status', 'Material de Aprendizaje activado');
        }

        return back()->with('error', 'No se puede restaurar el Material de Aprendizaje');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialAprendizaje  $materialAprendizaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialAprendizaje $materialAprendizaje)
    {
        $materialAprendizaje->delete();
        return back()->with('status', 'Evento eliminado con éxito');
    }
}
