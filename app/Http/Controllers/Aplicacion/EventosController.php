<?php

namespace App\Http\Controllers\Aplicacion;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Eventos\StorePost;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function verEventos(Request $request)
    {
        return view('aplicacion.eventos.eventos');
    }
    public function verFormularioeventos(Request $request)
    {
        return view('aplicacion.eventos.frmEventos');
    }
    public function showForm(Request $request)
    {
        $evento = new Evento;
        return view('aplicacion.eventos.frmEventos', compact('evento'))->with(['url' => route('app.eventos.post')]);
    }

    public function edit($id)
    {
        $evento = Fondo::find($id);
        return view('aplicacion.eventos.frmEventos', compact('evento'))->with(['url' => route('app.eventos.put')]);
    }

}
