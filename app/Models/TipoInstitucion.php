<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoInstitucion extends Model
{
    public static $search = null;
    protected $table = 'tipo_institucion';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaInstitucion()
    {
        return $this->hasMany(IniciativaInstitucion::class, 'tipo_institucion_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaInstitucionOrganizacion()
    {
        return $this->hasMany(IniciativaInstitucion::class, 'tipo_institucion_id', 'id')
            ->join('iniciativas', 'iniciativas.id', '=', 'iniciativa_institucion.iniciativa_id')
            ->where('iniciativas.iniciativa_origen_id', '=', 1);
    }

    /**
     * @return Builder
     */
    public static function builderTipoInstitucion()
    {
        $query = TipoInstitucion::orderBy('created_at', request('created_at', 'DESC'));

        if (!is_array(self::$search)) {
            $query->where('descripcion', 'ilike', '%' . self::$search . '%');
        }

        if (is_array(self::$search)) {
            $query->whereIn('tipo_institucion.id', self::$search);
        }

        return $query;
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenerTipoInstitucionAll()
    {
        return $rs = self::builderTipoInstitucion()->get() ?? [];
    }
}
