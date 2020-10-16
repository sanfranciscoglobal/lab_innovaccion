<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Iniciativas extends Model
{
    public static $paginate = 10;
    public static $search = null;
    protected $table = 'iniciativas';
    protected $fillable = [
        'estado_registro_id',
        'iniciativa_origen_id',
        'iniciativa_actor_id',
        'iniciativa_informacion_id',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaInformacion()
    {
        return $this->belongsTo(IniciativaInformacion::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaActor()
    {
        return $this->belongsTo(IniciativaActor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaUbicaciones()
    {
        return $this->hasMany(IniciativaUbicacion::class, 'iniciativa_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaInstituciones()
    {
        return $this->hasMany(IniciativaInstitucion::class, 'iniciativa_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaPoblaciones()
    {
        return $this->hasMany(IniciativaPoblacion::class, 'iniciativa_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaOds()
    {
        return $this->hasMany(IniciativaOds::class, 'iniciativa_id', 'id');
    }

    /**
     * @return Builder
     */
    public static function builderIniciativa()
    {
        $query = Iniciativas::orderBy('created_at', request('created_at', 'DESC'));

        if (self::$search) {

        }

        return $query;
    }

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerIniciativasPaginate()
    {
        $rs = self::builderIniciativa();
        return $rs->paginate(self::$paginate) ?? [];
    }


}
