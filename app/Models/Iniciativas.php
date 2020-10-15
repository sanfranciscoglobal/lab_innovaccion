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
