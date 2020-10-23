<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Iniciativas;
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
        $iniciativas = Iniciativas::obtenerIniciativasPaginate();
        return view('web.iniciativas.index', compact('iniciativas'));
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
     * @param  \App\Models\Iniciativas  $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function show(Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iniciativas  $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function edit(Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iniciativas  $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iniciativas  $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iniciativas $iniciativas)
    {
        //
    }
}
