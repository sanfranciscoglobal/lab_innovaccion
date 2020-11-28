<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\CustomUrl;
use App\Http\Controllers\Controller;
use App\Models\Fondo;
use Illuminate\Http\Request;

class FondosController extends Controller
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
        $fondos = Fondo::obtenerFondosWithTrashedAll();
        return view('backend.fondos.index', compact('fondos'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fondo $fondo
     * @return \Illuminate\Http\Response
     */
    public function show(Fondo $fondo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fondo $fondo
     * @return \Illuminate\Http\Response
     */
    public function edit(Fondo $fondo)
    {
        session()->put('admin', 'admin.fondos.index');
        $slug = CustomUrl::urlTitle($fondo->organizacion);
        return redirect()->route('app.fondos.edit', [$fondo->id, $slug]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Fondo $fondo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fondo $fondo)
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
        if (Fondo::obtenerFondoWithTrashedRestore($id)) {
            return back()->with('status', 'Fondo activado');
        }

        return back()->with('error', 'No se puede restaurar el fondo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fondo $fondo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fondo $fondo)
    {
        $fondo->delete();
        return back()->with('status', 'Iniciativa eliminada con éxito');
    }
}
