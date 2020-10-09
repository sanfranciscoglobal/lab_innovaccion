<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;

// Models
use App\Models\User;
use App\Models\Perfil;

// Requests
use App\Http\Requests\Perfil\StorePost;
// use App\Http\Requests\Perfil\StorePost;

class RegistroController extends Controller
{

    public function __construct(){
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show perfil de usuario.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Request $request)
    {
        $user = User::find(Auth::id());
        $perfil = new Perfil;
        return view('aplicacion.registro.frmRegistro', compact('user', 'perfil'))->with(['URL' => route('app.perfil.post'), 'method' => 'POST']);
    }

    public function edit(Request $request, $id)
    {
        $user = User::find(Auth::id());
        $perfil = Perfil::find($id);
        return view('aplicacion.registro.frmRegistro', compact('user', 'perfil'))->with(['URL' => route('app.perfil.put'), 'method' => 'PUT']);
    }

    public function store(StorePost $request){
        $validatedData = $request->validated();

        if($fondo = Perfil::create($validatedData)){
            $user = User::find(Auth::id());
            $user->perfil_id = $fondo->id;
            $user->save();
            return redirect()->route('app.home')->with('status', 'Perfil creado con éxito');
        }
        return back()->with('error', 'Perfil no creado');
    }
}
