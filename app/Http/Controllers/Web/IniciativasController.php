<?php

namespace App\Http\Controllers\Web;

use App\Exports\IniciativasExport;
use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Canton;
use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use App\Models\TipoInstitucion;
use App\Models\TipoPoblacion;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;

class IniciativasController extends Controller
{
//    private $excel;
//
//    public function __construct(Excel $excel)
//    {
//        $this->excel = $excel;
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Iniciativas::$paginate = 10;
        Iniciativas::$search = $request->has('buscar') ? $request->buscar : null;
        Iniciativas::$search_canton_id = $request->has('canton_id') ? $request->canton_id : [];
        Iniciativas::$search_tipo_institucion = $request->has('tipo_institucion') ? $request->tipo_institucion : [];
        Iniciativas::$search_ods_categorias = $request->has('ods_categorias') ? $request->ods_categorias : [];
        Iniciativas::$search_tipo_poblacion = $request->has('tipo_poblacion') ? $request->tipo_poblacion : [];

        $cantones = Canton::whereIn('id', Iniciativas::$search_canton_id)->get();
        $tipoInstituciones = TipoInstitucion::whereIn('id', Iniciativas::$search_tipo_institucion)->get();
        $odsCategorias = OdsCategoria::whereIn('id', Iniciativas::$search_ods_categorias)->get();
        $tipoPoblaciones = TipoPoblacion::whereIn('id', Iniciativas::$search_tipo_poblacion)->get();
        $buscar = $request->buscar;

        $iniciativas = Iniciativas::obtenerIniciativasPaginate();

        //dd($request);

        return view('web.iniciativas.index', compact('iniciativas', 'cantones', 'tipoInstituciones', 'odsCategorias', 'tipoPoblaciones', 'buscar'));
    }
    public static function data(Request $request)
    {
        
        Iniciativas::$search = $request->has('buscar') ? $request->buscar : null;
        Iniciativas::$search_canton_id = $request->has('canton_id') ? $request->canton_id : [];
        Iniciativas::$search_tipo_institucion = $request->has('tipo_institucion') ? $request->tipo_institucion : [];
        Iniciativas::$search_ods_categorias = $request->has('ods_categorias') ? $request->ods_categorias : [];
        Iniciativas::$search_tipo_poblacion = $request->has('tipo_poblacion') ? $request->tipo_poblacion : [];
        $cantones = Canton::whereIn('id', Iniciativas::$search_canton_id)->get();
        $tipoInstituciones = TipoInstitucion::whereIn('id', Iniciativas::$search_tipo_institucion)->get();
        $odsCategorias = OdsCategoria::whereIn('id', Iniciativas::$search_ods_categorias)->get();
        $tipoPoblaciones = TipoPoblacion::whereIn('id', Iniciativas::$search_tipo_poblacion)->get();
        $buscar = $request->buscar;
        $iniciativas=Iniciativas::obtenerIniciativasAll();
        foreach( $iniciativas as $x){
           $x->iniciativaUbicaciones; 
           $x->iniciativaOds;
           $x->iniciativaPoblacionesCompleto;
        }
        return view('web.iniciativas.mapa',compact('iniciativas'));
    }

    public function exportarExcel(Request $request)
    {
        $fecha = Carbon::now()->format('Ymdhi');
        return Excel::download(new IniciativasExport(), 'download-iniciativa-' . $fecha . '.xlsx');
    }
    public function mapa(){
        return view('mapa');
    }
}
