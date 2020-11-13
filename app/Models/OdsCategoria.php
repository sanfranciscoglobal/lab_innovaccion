<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class OdsCategoria extends Model
{
    public static $search = null;
    protected $table = 'ods_categorias';

    /**
     * @return Builder
     */
    public static function builderOdsCategoria()
    {
        $query = OdsCategoria::orderBy('created_at', request('created_at', 'DESC'));

        if (self::$search) {
            //$query->orWhere('descripcion', 'like', '%' . self::$search . '%');
        }

        return $query;
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenerOdsCategoriaAll()
    {
        return self::builderOdsCategoria()->get() ?? [];
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenerOdsCategoriaPluckNameIdArray()
    {
        return self::builderOdsCategoria()->pluck('nombre','id')->all() ?? [];
    }
}
