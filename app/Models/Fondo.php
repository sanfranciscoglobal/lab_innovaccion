<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Auth;


class Fondo extends Model
{
    use SoftDeletes;

    protected $table = 'fondos';
    protected $fillable = ['fuente', 'organizacion', 'nombre_fondo', 'info', 'fecha_inicio', 'fecha_fin', 'facebook', 'instagram', 'youtube', 'linkedin', 'twitter', 'imagen', 'terminos'];
    public static $paginate = 10;
    public static $own = false;

    public function user(){
        return $this->belongsTo('App\Models\User')->withTrashed();
    }

    /**
     * @return Builder
     */
    public static function builder()
    {
        $query = Fondo::orderBy('created_at', 'DESC');
        if (self::$own) {
            $query->where('user_id', Auth::id());
        }
        return $query;
    }

    /**
     * Obtener paginador de fondos
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerPaginate()
    {
        $rs = self::builder();
        return $rs->paginate(self::$paginate) ?? [];
    }
}
