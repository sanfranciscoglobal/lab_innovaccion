<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class TipoPoblacion extends Model
{
    public static $search = null;
    protected $table = 'tipo_poblacion';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function IniciativaPoblacion()
    {
        return $this->hasMany(IniciativaPoblacion::class, 'tipo_poblacion_id', 'id');
    }

    /**
     * @return Builder
     */
    public static function builderTipoPobracion()
    {
        $query = TipoPoblacion::orderBy('created_at', request('created_at', 'DESC'));

        if (self::$search) {
            //$query->orWhere('descripcion', 'like', '%' . self::$search . '%');
        }

        if (is_array(self::$search)) {
            $query->wherein('tipo_poblacion.id', self::$search);
        }

        return $query;
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenerTipoPoblacionAll()
    {
        return $rs = self::builderTipoPobracion()->get() ?? [];
    }
}
