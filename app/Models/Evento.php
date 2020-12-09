<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Auth;

class Evento extends Model
{
    //
    use SoftDeletes;
    protected $table = 'eventos';
    protected $fillable = ['nombre', 'organizador', 'fecha', 'hora', 'imagen', 'descripcion', 'tipo', 'canton','area1','area2','sitioweb', 'ubicacion', 'org_lat', 'org_long', 'url', 'terminos'];
    public static $paginate = 10;
    public static $own = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function cantonid()
    {
        return $this->belongsTo('App\Models\Canton', "canton", "id");
    }

    /**
     * @return string|null
     */
    public function getDeletedAtStatusAttribute()
    {
        return ($this->deleted_at) ? true : false;
    }

    /**
     * @return Builder
     */
    public static function builder()
    {
        $query = Evento::orderbyDesc('created_at', 'DESC');
        // if (self::$search) {
        // }
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

    public static function obtenerEventosCount()
    {
        return self::builder()->count() ?? 0;
    }

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerEventosWithTrashedAll()
    {
        $rs = self::builder();
        return $rs->withTrashed()->get() ?? [];
    }

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerEventoWithTrashedRestore($id)
    {
        if (Evento::withTrashed()->find($id)->restore()) {
            return true;
        }

        return false;
    }

}
