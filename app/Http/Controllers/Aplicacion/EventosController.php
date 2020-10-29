<?php

namespace App\Http\Controllers\Aplicacion;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Eventos\StorePost;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EventosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function __construct(){
        $this->middleware(['auth', 'verified','has-perfil'])->except('verEventos','searchEventos');
        $this->middleware('acceso-app:user,admin,superadmin')->except('verEventos','searchEventos');
    }
    public function verEventos(Request $request)
    {
        $autentificacion=false;
        if (Auth::check()) {
            // The user is logged in...
            $autentificacion=true;
        }

        $eventos = Evento::orderbyDesc('fecha','hora')->get();
      
        return view('aplicacion.eventos.eventos', compact('eventos','autentificacion'));
    }
    public function searchEventos(Request $request)
    {
        $autentificacion=false;
        if (Auth::check()) {
            // The user is logged in...
            $autentificacion=true;
        }
        $eventos = Evento::orderbyDesc('fecha','hora')->get();
        if ($request->tipoevento!=null) {
            if($request->tipoevento!=2){
                if ($request->canton!=null){
                    $eventos = Evento::orderbyDesc('fecha','hora')->where('tipo',$request->tipoevento)->whereIn('canton',$request->canton)->get();
                }
                else{
                    $eventos = Evento::orderbyDesc('fecha','hora')->where('tipo',$request->tipoevento)->get();
                    
                }
                
            }
            else{
                $eventos = Evento::orderbyDesc('fecha','hora')->get();
            }
        }
        return view('aplicacion.eventos.eventos', compact('eventos','autentificacion'));
    }
  

    public function verFormularioeventos(Request $request)
    {
        
        return view('aplicacion.eventos.frmEventos');
    }

    public function showForm(Request $request)
    {
        
        $evento = new Evento;
        
        return view('aplicacion.eventos.frmEventos', compact('evento'))->with(['url' => route('app.eventos.post'),'method'=>'POST']);
    }

    public function edit($id)
    {
     
        $evento = Evento::find($id);
        return view('aplicacion.eventos.frmEventos', compact('evento'))->with(['url' => route('app.eventos.put',$evento->id),'method'=>'PUT']);
    }

}
