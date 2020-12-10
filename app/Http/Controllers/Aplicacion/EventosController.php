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
        $this->middleware('acceso-app:user,admin,superadmin')->except('verEventos','searchEventos', 'verEventodetalle');
    }

    public function verEventodetalle(Evento $evento)
    {
        return view('aplicacion.eventos.eventodesplegado', compact('evento'));
    }
    
    public function verEventos(Request $request)
    {
        $busqueda=null;
        $jumpsection=false;
        Evento::$paginate = 9;
        $eventos = Evento::obtenerPaginate();

        // $eventos = Evento::orderbyDesc('fecha','hora')->get();

        return view('aplicacion.eventos.eventos', compact('eventos','jumpsection'))->with('busqueda',$busqueda);
    }
    
    public function searchEventos(Request $request)
    {
        $busqueda=$request;
        $jumpsection=true;
        $eventos = Evento::orderbyDesc('fecha','hora')->paginate(Evento::$paginate);
        if ($request->tipoevento!=null) {
            if($request->tipoevento!=2){
                if ($request->canton!=null && $request->tipoevento==1){
                    $eventos = Evento::orderbyDesc('fecha','hora')->where('tipo',$request->tipoevento);
                    $eventos=$eventos->whereIn('canton',$request->canton)->orwhereIn('area1',$request->canton)->orwhereIn('area2',$request->canton)->paginate(Evento::$paginate);
                }
                else{
                    $eventos = Evento::orderbyDesc('fecha','hora')->where('tipo',$request->tipoevento)->paginate(Evento::$paginate);

                }

            }
            else{
                $eventos = Evento::orderbyDesc('fecha','hora')->paginate(Evento::$paginate);
            }
        }
        return view('aplicacion.eventos.eventos', compact('eventos','jumpsection'))->with('busqueda',$busqueda);
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

    public function edit(Evento $evento)
    {
     
        //$evento = Evento::find($id);
        return view('aplicacion.eventos.frmEventos', compact('evento'))->with(['url' => route('app.eventos.put',$evento->id),'method'=>'PUT']);
    }

}
