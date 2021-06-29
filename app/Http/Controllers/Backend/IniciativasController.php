<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Iniciativas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IniciativasController extends Controller
{
    public static $coincidencia = 30;
    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session()->forget('admin');
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(session()->get('admin'));
        if ($iniciativas = Iniciativas::obtenerIniciativasWithTrashedAll()) {
            foreach ($iniciativas as $iniciativa) {
                //$iniciativa->similar_nombre_organizacion($iniciativas);
                self::setSimilarText($iniciativas, $iniciativa);
            }
        }

        return view('backend.iniciativas.index', compact('iniciativas'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function show(Iniciativas $iniciativas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function edit(Iniciativas $iniciativa)
    {
        session()->put('admin', 'admin.iniciativas.index');
        return redirect()->route('app.iniciativas.edit', $iniciativa->id);
    }

    /**
     * Activar the specified resource in storage.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function activar($id)
    {
        if (Iniciativas::obtenerIniciativaWithTrashedRestore($id)) {
            return back()->with('status', 'Iniciativa activada');
        }

        return back()->with('error', 'No se puede restaurar la iniciativa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iniciativas $iniciativas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iniciativas $iniciativa)
    {
        $iniciativa->delete();
        return back()->with('status', 'Iniciativa eliminada con éxito');
    }

    /**
     * @param Iniciativas[] $iniciativas
     * @param Iniciativas $iniciativa
     */
    public static function setSimilarText($iniciativas, $iniciativa)
    {
        $similarNombre = $similarWeb = $similarIniciativa = $similarComponente =  [];
        foreach ($iniciativas as $iniciativa_) {
            if ($iniciativa_->id != $iniciativa->id) {
                if ($iniciativa_->nombre_organizacion) {
                    similar_text($iniciativa->nombre_organizacion, $iniciativa_->nombre_organizacion, $percentNombre);
                    similar_text($iniciativa->iniciativa_actor_sitio_web, $iniciativa_->iniciativa_actor_sitio_web, $percentSitioWeb);
                    similar_text($iniciativa->nombre_iniciativa, $iniciativa_->nombre_iniciativa, $percentIniciativa);
                    similar_text($iniciativa->componente_innovador, $iniciativa_->componente_innovador, $percentComponente);

                    if ($percentNombre > self::$coincidencia) {
                        $similarNombre[$iniciativa_->id] = $percentNombre;
                    }

                    if ($percentSitioWeb > self::$coincidencia) {
                        $similarWeb[$iniciativa_->id] = $percentSitioWeb;
                    }

                    if ($percentIniciativa > self::$coincidencia) {
                        $similarIniciativa[$iniciativa_->id] = $percentIniciativa;
                    }

                    if ($percentComponente > self::$coincidencia) {
                        $similarComponente[$iniciativa_->id] = $percentComponente;
                    }
                }
            }
        }

        arsort($similarNombre);
        arsort($similarWeb);
        arsort($similarIniciativa);
        arsort($similarComponente);

        $id = array_key_first($similarNombre);
        $id_web = array_key_first($similarWeb);
        $id_iniciativa = array_key_first($similarIniciativa);
        $id_componente = array_key_first($similarComponente);

        $iniciativa::$similar_nombre_organizacion = isset($similarNombre[$id]) ? [
            'id' => $id,
            'value' => $similarNombre[$id]
        ] : null;

        $iniciativa::$similar_sitio_web = isset($similarWeb[$id_web]) ? [
            'id' => $id,
            'value' => round($similarWeb[$id_web])
        ] : null;

        $iniciativa::$similar_iniciativa = isset($similarIniciativa[$id_iniciativa]) ? [
            'id' => $id,
            'value' => round($similarIniciativa[$id_iniciativa])
        ] : null;

        $iniciativa::$similar_componente = isset($similarComponente[$id_componente]) ? [
            'id' => $id,
            'value' => round($similarComponente[$id_componente])
        ] : null;
    }
}
