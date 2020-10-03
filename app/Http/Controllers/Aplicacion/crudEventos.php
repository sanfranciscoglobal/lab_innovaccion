<?php

namespace App\Http\Controllers\Aplicacion;
use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\Eventos\StorePost;
use App\Http\Requests\Eventos\UpdatePost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class crudEventos extends Controller
{
    //
    public function store(StorePost $request)
    {
        $datosEvento=request()->except('_token');
        if($request->hasFile('imagen')){
            $datosEvento['imagen']=$request->file('imagen')->store('uploads', 'public');
        }
   
        Evento::insert($datosEvento);
        return redirect()->route('home')->with('status', 'Evento creado con éxito');

    }

    public function update(UpdatePost $request, $id)
    {
        $datosEvento=request()->except('_token','_method');
        $evento=Evento::findOrfail($id);
        if(Auth::check()){
            if(Auth::id() == $evento->user_id){
                if ($request->hasFile('imagen')){
                
                Storage::delete('public/'.$evento->Foto);
                $datosEvento['imagen']=$request->file('imagen')->store('uploads','public');
                }
            
                
                Empleados::where('id','=',$id)->update($datosEvento);
                $evento=Empleados::findOrfail($id);
                return redirect()->route('home')->with('status', 'Evento modificado con éxito');;
            }
            else{
                return back()->with('status', 'No ingresaste este evento.');
            }
        } else {
            return back()->with('status', 'No encontramos un usuario autenticado.');
        }
        
    }


    public function destroy($id) {

        $evento = Evento::findOrfail($id);

        if(Auth::check()){
            if(Auth::id() != $evento->user_id){
                return back()->with('status', 'No ingresaste este fondo.');
            }
        } else {
            return back()->with('status', 'No encontramos un usuario autenticado.');
        }

        $evento->delete();
        return redirect()->route('mis-necesidades')->with('status', 'Fondo eliminado con éxito');
    }

}


