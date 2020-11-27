<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Iniciativas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IniciativasController extends Controller
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
        //dd(session()->get('admin'));
        $iniciativas = Iniciativas::obtenerIniciativasWithTrashedAll();
        return view('backend.iniciativas.index', compact('iniciativas'));
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
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function show(Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function edit(Iniciativas $iniciativa)
    {
        session()->put('admin', 'admin.iniciativas.index');
        return redirect()->route('app.iniciativas.edit', $iniciativa->id);
    }

    /**
     * Activar the specified resource in storage.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function activar($id)
    {
        if (Iniciativas::obtenerIniciativaWithTrashedRestore($id)) {
            return back()->with('status', 'Iniciativa activada');
        }

        return back()->with('error', 'No se puede restaurar la iniciativa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iniciativas $iniciativa)
    {
        $iniciativa->delete();
        return back()->with('status', 'Iniciativa eliminada con éxito');
    }
}
