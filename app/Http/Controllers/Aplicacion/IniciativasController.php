<?php

namespace App\Http\Controllers\Aplicacion;

use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Iniciativa\StorePost;

//use App\Http\Requests\Contacto\StorePost;
//use App\Models\Contacto;
use App\Models\EstadoRegistro;
use App\Models\IniciativaActor;
use App\Models\IniciativaInformacion;
use App\Models\IniciativaOrigen;
use App\Models\Iniciativas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IniciativasController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        Iniciativas::$paginate = 2;
        $iniciativas = Iniciativas::obtenerIniciativasPaginate();
        return view('aplicacion.iniciativa.index', compact('iniciativas'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        IniciativaOrigen::$paginate = $request->mostrar;
        $iniciativasOrigen = IniciativaOrigen::obtenerIniciativaOrigenPaginate();
        return view('aplicacion.iniciativa.create', compact('iniciativasOrigen'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(StorePost $request)
    {
        DB::beginTransaction();
        $requestData = $request->validated();
        $validator = Validator::make($requestData, StorePost::myRules());

        dd($request);

        try {
            if ($validator->fails()) {
                return redirect('admin.material-docente.create')
                    ->withErrors($validator)
                    ->withInput();
            }


            if ($modelActor = IniciativaActor::create($requestData)) {
                if ($image = Archivos::storeImagen('iniciativas-' . date('his'), $request->logo, 'iniciativas')) {
                    $requestData['logo'] = $image;
                    if ($modelInformacion = IniciativaInformacion::create($requestData)) {
                        $estado = EstadoRegistro::obtenerEstadoRegistroRevision();
                        $modelIniciativa = new Iniciativas();
                        $modelIniciativa->estado_registro_id = $estado->id;
                        $modelIniciativa->iniciativa_origen_id = $request->iniciativa_propiedad;
                        $modelIniciativa->iniciativa_actor_id = $modelActor->id;
                        $modelIniciativa->iniciativa_informacion_id = $modelInformacion->id;

                        if ($modelIniciativa->save()) {
                            DB::commit();
                            return redirect()
                                ->route('app.iniciativa.create')
                                ->with('status', 'Iniciativa cargada con éxito');
                        }
                    }
                }
            }

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Iniciativas $iniciativa)
    {
        $model = $iniciativa;
        $iniciativasOrigen = IniciativaOrigen::obtenerIniciativaOrigenPaginate();
        return view('aplicacion.iniciativa.edit', compact('model','iniciativasOrigen'));
    }
}
