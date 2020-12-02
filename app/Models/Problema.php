<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Problema extends Model
{
    use SoftDeletes;

    protected $table = 'problemas';
    public static $paginate = 10;
    public static $own = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'convocatoria_id', 'tipo_convocatoria_id', 'nombre', 'sector', 'subsector', 'confidencial', 'recomendaciones', 'datos', 'actividad', 'problema', 'archivo',     'telefono', 'web', 'facebook', 'instagram', 'linkedin', 'twitter', 'youtube', 'imagen', 'canton_id', 'ubicacion', 'latitud', 'longitud', 'terminos'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function tipo_convocatoria(){
        return $this->belongsTo('App\Models\TipoConvocatoria');
    }

    public function convocatoria(){
        return $this->belongsTo('App\Models\Convocatoria');
    }

    public function canton(){
        return $this->belongsTo('App\Models\Canton');
    }

    /**
     * @return Builder
     */
    public static function builder()
    {
        $query = Problema::orderBy('created_at', 'DESC');
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
}
