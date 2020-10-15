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
        $this->middleware(['auth', 'verified']);
        $this->middleware(['acceso-app:user,admin,superadmin'])->except('verFondos');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verFondos(Request $request)
    {
        return view('aplicacion.fondos.fondos');
    }

    public function showForm(Request $request)
    {
        $fondo = new Fondo;
        return view('aplicacion.fondos.frmFondos', compact('fondo'))->with(['url' => route('app.fondos.post'), 'method' => 'POST']);
    }

    public function edit($id)
    {
        $fondo = Fondo::find($id);

        if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        if($fondo->user_id != Auth::id()){
            return back()->withErrors('Parece que no ingresaste este fondo.');
        }
        return view('aplicacion.fondos.frmFondos', compact('fondo'))->with(['url' => route('app.fondos.put', $fondo->id), 'method' => 'PUT']);
    }

}
