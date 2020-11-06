<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk

// Models
use App\Models\User;
use App\Models\Perfil;

// Requests
use App\Http\Requests\Perfil\StorePost;
// use App\Http\Requests\Perfil\StorePost;

class RegistroController extends Controller
{

    // public function __construct(){
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show perfil de usuario.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Request $request)
    {
        $user = Auth::user();
        if($user->perfil_id != null && Perfil::find($user->perfil_id)){
            return redirect()->route('app.perfil.edit');
        }
        $perfil = new Perfil;
        return view('aplicacion.registro.frmRegistro', compact('user', 'perfil'))->with(['URL' => route('app.perfil.post'), 'method' => 'POST']);
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $perfil = Perfil::find($user->perfil_id);
        if($user->perfil_id == null || !$perfil){
            return redirect()->route('app.registro');
        }
        return view('aplicacion.registro.frmRegistro', compact('user', 'perfil'))->with(['URL' => route('app.perfil.put', $user->perfil_id), 'method' => 'PUT']);
    }

    public function store(StorePost $request){
        $validatedData = $request->validated();

        if($perfil = Perfil::create($validatedData)){
            $user = Auth::user();
            $user->perfil_id = $perfil->id;
            $user->save();

            if(isset($validatedData['avatar'])){
                // $name = CustomUrl::urlTitle($validatedData['name']).'_'.$perfil->id;
                $name = 'avatar_'.$perfil->id;
                $imageName = Archivos::storeImagen($name, $validatedData['avatar'], 'perfil');
                $perfil->avatar = $imageName;
                $perfil->save();
            }

            return redirect()->route('app.escritorio')->with('status', 'Perfil creado con éxito');
        }
        return back()->with('error', 'Perfil no creado');
    }

    public function update(StorePost $request, Perfil $perfil){
        $validatedData = $request->validated();
        $perfil->update($request->validated());

        if(isset($validatedData['avatar'])){
            $name = 'avatar_'.$perfil->id;
            $imageName = Archivos::storeImagen($name, $validatedData['avatar'], 'perfil');
            $perfil->avatar = $imageName;
            $perfil->save();
        }

        return redirect()->route('app.escritorio')->with('status', 'Perfil modificado con éxito');
    }

    public function destroy(User $user) {
        if(Auth::id() != $user->id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin')) ){
            return back()->with('error', 'No puedes eliminar este usuario');
        }
        // Perfil::find($user->perfil_id)->delete();
        $user->delete();
        return redirect()->route('home')->with('status', 'Usuario eliminado con éxito');
    }
}
