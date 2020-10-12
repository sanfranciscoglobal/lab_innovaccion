<?php

namespace App\Http\Controllers\Aplicacion;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Eventos\StorePost;
use App\Models\Evento;
use App\Models\Canton;
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
        $cantones= Canton::pluck('nombre','id');
        return view('aplicacion.eventos.frmEventos', compact('evento','cantones'))->with(['url' => route('app.eventos.post'),'method'=>'POST']);
    }

    public function edit($id)
    {
        $cantones= Canton::pluck('nombre','id');
        $evento = Evento::find($id);
        return view('aplicacion.eventos.frmEventos', compact('evento','cantones'))->with(['url' => route('app.eventos.put',$evento->id),'method'=>'PUT']);
    }

}
