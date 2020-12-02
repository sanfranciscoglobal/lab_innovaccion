<?php

namespace App\Http\Controllers\Aplicacion;

use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;
use App\Http\Requests\Iniciativa\StorePost;
//use App\Http\Requests\Contacto\StorePost;
//use App\Models\Contacto;
use App\Models\EstadoRegistro;
use App\Models\TipoSector;
//use App\Models\Innovacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Convocatoria;
use App\Models\Problema;
use App\Models\Solucion;
use App\Models\ConvocatoriaODS;
use App\Models\ConvocatoriaSector;
use App\Models\ConvocatoriaSubsector;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class InnovacionController extends Controller
{
    /**
     * Muestra el formulario de convocatorias (Fase A componente H)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmInnovacionAbiertaIdentificacion(Request $request)
    {
        $convocatoria = new Convocatoria;
        return view('aplicacion.innovacion.create',compact('convocatoria'))->with(['url' => route('admin.convocatoria.post'),'method'=>'POST']);
    }

    /**
     * Muestra el formulario de problemas (Fase B componente H)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmGestionInnovacion(Convocatoria $convocatoria)
    {
        if($convocatoria->fecha_inicio > date('Y-m-d') || $convocatoria->fecha_cierre <= date('Y-m-d')){
            return redirect()->back()->with('error', 'Esta convocatoria esta cerrada, y no se admiten mas problemas.');
        }
        session()->forget('step');
        $problema = new Problema;
        $tipo = $convocatoria->tipoconvocatoria_id;
        $url = $url2 = $url3 = route("app.problemas.store");
        return view('aplicacion.innovacion.gestion.identificacion.create', compact('convocatoria', 'problema'))->with(['tipo' => $tipo, 'url' => $url, 'url2' => $url2, 'url3' => $url3, 'method' => 'POST']);
    }

    /**
     * Muestra el formulario de problemas para editar (Fase B componente H)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frmGestionInnovacionEdit(Convocatoria $convocatoria, Problema $problema)
    {
        // $convocatoria = Convocatoria::find($convocatoria_id);
        if(Auth::id() != $problema->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este problema.');
        }

        $tipo = $convocatoria->tipoconvocatoria_id;
        $url = route("app.problemas.update", [$problema->id]);
        $url2 = route("app.problemas.update.fase2", [$problema->id]);
        $url3 = route("app.problemas.update.fase3", [$problema->id]);
        return view('aplicacion.innovacion.gestion.identificacion.create', compact('convocatoria', 'problema'))->with(['tipo' => $tipo, 'url' => $url, 'url2' => $url2, 'url3' => $url3, 'method' => 'PUT']);
    }

    public function verInnovaciones(Request $request)
    {
        $convocatorias = Convocatoria::orderBy('created_at','DESC')->paginate(Convocatoria::$paginate);
        // $convocatorias = Convocatoria::where('fecha_cierre','>=',date('Y/m/d'))->paginate(Convocatoria::$paginate);
        // $convocatorias_antiguas = Convocatoria::where('fecha_cierre','<=',date('Y/m/d'))->paginate(8);
        return view('aplicacion.innovacion.vista_convocatoria.innovacionconvocatoria', compact('convocatorias'));
    }

    /**
     * Muestra todos los problemas creados para las convocatorias (fase B componente H)
     * @return \Illuminate\Contracts\Support\Renderable 
     */
    public function verProblemas(Convocatoria $convocatoria)
    {
        $problemas = Problema::where('convocatoria_id', $convocatoria->id)->paginate(2);
        return view('aplicacion.innovacion.gestion.innovacionProblemas', compact('convocatoria', 'problemas'));
    }


    public function frmSolucion(Problema $problema)
    {
        session()->forget('step');
        $solucion = new Solucion;
        //$tipo = $convocatoria->tipoconvocatoria_id;
        $url = $url2 = $url3 = route("app.problemas.store");
        return view('aplicacion.innovacion.gestion.identificacion.create', compact('convocatoria', 'problema'))->with(['tipo' => $tipo, 'url' => $url, 'url2' => $url2, 'url3' => $url3, 'method' => 'POST']);
    }

    public function verSoluciones(Problema $problema)
    {
        $soluciones = Solucion::where('problema_id', $problema->id)->get();
        return view('aplicacion.innovacion.gestion.innovacionProblemas', compact('convocatoria', 'soluciones'));
    }
    
    public function searchConvocatorias(Request $request)
    {
        // $str_ods = json_encode($request->ods);
        // $sql='select distinct co.id from convocatorias_ods as ods inner join convocatorias as co on co.id=ods.convocatoria_id and 
        // tipoconvocatoria_id=2 and ods_id in '.$str_ods;
        // dd($sql);

        $convocatorias = Convocatoria::orderBy('created_at','DESC')->paginate(Convocatoria::$paginate);

        if ($request->tipoconvocatoria!=null) {
            if($request->tipoconvocatoria==2){
                $convocatorias= Convocatoria::where('tipoconvocatoria_id',$request->tipoconvocatoria)->orderBy('created_at','DESC');
                if ($request->ods!=null){
                    
                    $odslista=ConvocatoriaODS::select('convocatoria_id')->whereIn('ods_id',$request->ods)->get();
                    $convocatorias= $convocatorias->whereIn('id',$odslista);
                }
                if($request->estadoconvocatoria!=null){
                    if($request->estadoconvocatoria==1){
                        $convocatorias= $convocatorias->paginate(Convocatoria::$paginate);
                    }
                    else if($request->estadoconvocatoria==2){
                        $convocatorias= $convocatorias->where('fecha_cierre','>=',date('Y/m/d'))->paginate(Convocatoria::$paginate);
                    }
                    else{
                        $convocatorias= $convocatorias->where('fecha_cierre','<',date('Y/m/d'))->paginate(Convocatoria::$paginate);
                    }
                }
                else{
                    $convocatorias= $convocatorias->where('fecha_cierre','>=',date('Y/m/d'))->paginate(Convocatoria::$paginate);
                }
                
                return view('aplicacion.innovacion.vista_convocatoria.innovacionconvocatoria', compact('convocatorias'));


            }
            else{ 
                $convocatorias= Convocatoria::where('tipoconvocatoria_id',$request->tipoconvocatoria)->orderBy('created_at','DESC');
                if ($request->ods!=null){
                    $odslista=ConvocatoriaODS::select('convocatoria_id')->whereIn('ods_id',$request->ods)->get();
                    $convocatorias=$convocatorias->whereIn('id',$odslista);
                }
                if ($request->sector_productivo!=null){
                    $sectorlista=ConvocatoriaSector::select('convocatoria_id')->whereIn('sector_id',$request->sector_productivo)->get();
                    $convocatorias=$convocatorias->whereIn('id',$sectorlista);
                }
                if ($request->subsector_productivo!=null){
                    $subsectorlista=ConvocatoriaSubsector::select('convocatoria_id')->whereIn('subsector_id',$request->subsector_productivo)->get();
                    $convocatorias=$convocatorias->whereIn('id',$subsectorlista);
                }

                if($request->estadoconvocatoria!=null){
                    if($request->estadoconvocatoria==1){
                        $convocatorias= $convocatorias->paginate(Convocatoria::$paginate);
                    }
                    else if($request->estadoconvocatoria==2){
                        $convocatorias= $convocatorias->where('fecha_cierre','>=',date('Y/m/d'))->paginate(Convocatoria::$paginate);
                    }
                    else{
                        $convocatorias= $convocatorias->where('fecha_cierre','<',date('Y/m/d'))->paginate(Convocatoria::$paginate);
                    }
                }
                else{
                    $convocatorias= $convocatorias->where('fecha_cierre','>=',date('Y/m/d'))->paginate(Convocatoria::$paginate);
                }
                return view('aplicacion.innovacion.vista_convocatoria.innovacionconvocatoria', compact('convocatorias'));

            }
        }
        if($request->estadoconvocatoria!=null){
            if($request->estadoconvocatoria==1){
                $convocatorias= Convocatoria::orderBy('created_at','DESC')->paginate(Convocatoria::$paginate);
            }
            else if($request->estadoconvocatoria==2){
                $convocatorias= Convocatoria::where('fecha_cierre','>=',date('Y/m/d'))->orderBy('created_at','DESC')->paginate(Convocatoria::$paginate);
            }
            else{
                $convocatorias= Convocatoria::where('fecha_cierre','<',date('Y/m/d'))->orderBy('created_at','DESC')->paginate(Convocatoria::$paginate);
            }
        }
        else{
            $convocatorias= Convocatoria::orderBy('created_at','DESC')->paginate(Convocatoria::$paginate);
        }
        return view('aplicacion.innovacion.vista_convocatoria.innovacionconvocatoria', compact('convocatorias'));
    }
    

    


}
