<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

class IniciativaOrigen extends Model
{
    use SoftDeletes;
    public static $search = null;
    public static $paginate = 10;
    protected $table = 'iniciativa_origen';

    /**
     * @return Builder
     */
    public static function builderIniciativaOrigen()
    {
        $query = IniciativaOrigen::orderBy('created_at', request('created_at', 'DESC'));

        if (self::$search) {
            //$query->orWhere('descripcion', 'like', '%' . self::$search . '%');
        }

        return $query;
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenerIniciativaOrigenAll()
    {
        return $rs = self::builderIniciativaOrigen()->get() ?? [];
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenerIniciativaOrigenPaginate()
    {
        return $rs = self::builderIniciativaOrigen()->paginate(self::$paginate) ?? [];
    }
}
