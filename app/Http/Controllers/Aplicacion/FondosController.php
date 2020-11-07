<?php

namespace App\Http\Controllers\Aplicacion;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;

// Models
use App\Models\Fondo;

class FondosController extends Controller
{
    public function __construct(){
        $this->middleware('acceso-app:user,admin,superadmin')->except('verFondos');
    }

    /**
     * Muestra el listado de fondos (componente E)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verFondos()
    {
        Fondo::$paginate = 2;
        $fondos = Fondo::obtenerPaginate();
        return view('aplicacion.fondos.fondos', compact('fondos'));
    }

    /**
     * Muestra el formulario de fondos (componente E)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showForm()
    {
        $fondo = new Fondo;
        return view('aplicacion.fondos.frmFondos', compact('fondo'))->with(['url' => route('app.fondos.post'), 'method' => 'POST']);
    }

    /**
     * Muestra el formulario de fondos para editar (componente E)
     * @param App\Models\Fondo $fondo
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Fondo $fondo)
    {
        if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        return view('aplicacion.fondos.frmFondos', compact('fondo'))->with(['url' => route('app.fondos.put', $fondo->id), 'method' => 'PUT']);
    }

}
