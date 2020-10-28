<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;


class Fondo extends Model
{
    use SoftDeletes;

    protected $table = 'fondos';
    protected $fillable = ['fuente', 'organizacion', 'nombre_fondo', 'info', 'fecha_inicio', 'fecha_fin', 'facebook', 'instagram', 'youtube', 'linkedin', 'twitter', 'imagen', 'terminos'];
    public static $paginate = 10;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return Builder
     */
    public static function builder()
    {
        $query = Fondo::orderBy('created_at', 'DESC');
        // if (self::$search) {
        // }
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
