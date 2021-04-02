<?php

namespace App\Models;

use App\Helpers\CustomUrl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Solucion extends Model
{
    //
    use SoftDeletes;
    protected $table = 'soluciones';
    protected $fillable = ['problema_id', 'sectorsolucion_id', 'nombre', 'descripcion', 'imagen', 'descripcion', 'estado_descrip', 'archivo', 'nivelsolucion_id', 'concepto1',
    'concepto2','concepto3','telefono','web','facebook','instagram','linkededin','twitter','youtube','terminos'];
    public static $paginate = 10;
    public static $own = false;


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function problemaid(){
        return $this->belongsTo('App\Models\Problema', "problema_id","id");
    }
    public function sectorsolucionid(){
        return $this->belongsTo('App\Models\SectorSolucion', "sectorsolucion_id","id");
    }
    public function nivelsolucionid(){
        return $this->belongsTo('App\Models\NivelSolucion', "nivelsolucion_id","id");
    }
    public function tipopropuestas(){
        return $this->hasMany('App\Models\Soluciontipoinnova','solucion_id','id');
    }
    public function observacionesid(){
        return $this->hasOne('App\Models\SolucionObservacion','solucion_id','id');
    }

    public function mejorada(){
        return $this->hasOne('App\Models\SolucionMejorada');
    }

    public function rating(){
        return $this->hasMany('App\Models\SolucionRating');
    }

    public function comentarios(){
        return $this->hasMany('App\Models\SolucionComentario');
    }

    public static function builder()
    {
        $query = Solucion::orderBy('created_at', 'DESC');
        if (self::$own) {
            $query->where('user_id', Auth::id());
        }
        return $query;
    }

    /**
     * Obtener paginador de problemas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerPaginate()
    {
        $rs = self::builder();
        return $rs->paginate(self::$paginate) ?? [];
    }

    public function getSlugAttribute() {
        return CustomUrl::urlTitle($this->nombre);
    }
}
