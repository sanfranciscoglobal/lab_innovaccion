<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Canton;
use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use App\Models\TipoInstitucion;
use App\Models\TipoPoblacion;
use Illuminate\Http\Request;

class IniciativasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        Iniciativas::$paginate = 10;
        Iniciativas::$search_canton_id = $request->has('canton_id') ? $request->canton_id : [];
        Iniciativas::$search_tipo_institucion = $request->has('tipo_institucion') ? $request->tipo_institucion : [];
        Iniciativas::$search_ods_categorias = $request->has('ods_categorias') ? $request->ods_categorias : [];
        Iniciativas::$search_tipo_poblacion = $request->has('tipo_poblacion') ? $request->tipo_poblacion : [];

        $cantones = Canton::whereIn('id', Iniciativas::$search_canton_id)->get();
        $tipoInstituciones = TipoInstitucion::whereIn('id', Iniciativas::$search_tipo_institucion)->get();
        $odsCategorias = OdsCategoria::whereIn('id', Iniciativas::$search_ods_categorias)->get();
        $tipoPoblaciones = TipoPoblacion::whereIn('id', Iniciativas::$search_tipo_poblacion)->get();

        $iniciativas = Iniciativas::obtenerIniciativasPaginate();
//        dd($iniciativas);
//        dd($cantones);
//        dd($cantones, $request);

        return view('web.iniciativas.index', compact('iniciativas', 'cantones', 'tipoInstituciones', 'odsCategorias', 'tipoPoblaciones'));
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
    public function edit(Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iniciativas $iniciativas)
    {
        //
    }
}
