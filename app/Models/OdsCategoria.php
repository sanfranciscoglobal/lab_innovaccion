<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

class OdsCategoria extends Model
{
    use SoftDeletes;
    public static $search = null;
    protected $table = 'ods_categorias';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function IniciativaOds()
    {
        return $this->hasMany(IniciativaOds::class, 'ods_categoria_id', 'id');
    }

    public function getNombreOdsAttribute()
    {
        return 'ODS ' . $this->id . ': ' . $this->nombre;
    }

    /**
     * @return Builder
     */
    public static function builderOdsCategoria()
    {
        $query = OdsCategoria::orderBy('ods_categorias.id', request('created_at', 'ASC'));

        if (!is_array(self::$search) && self::$search) {
            $query->whereRaw("concat('ODS ', ods_categorias.id, ': ',ods_categorias.nombre) ilike '%" . self::$search . "%'");
        }

        if (is_array(self::$search) && self::$search) {
            $query->whereIn('ods_categorias.id', self::$search);
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
        return self::builderOdsCategoria()->pluck('nombre', 'id')->all() ?? [];
    }

    public static function obtenerODSNombre($id)
    {
        $ods=OdsCategoria::where('id','=',$id)->first();
        $odsnombre='ODS '.$ods->id.': '.$ods->nombre;
        return $odsnombre;
    }
}
