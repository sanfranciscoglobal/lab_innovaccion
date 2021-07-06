<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class IniciativaActor extends Model
{
    protected $table = 'iniciativa_actor';
    protected $fillable = [
        'nombre_organizacion',
        'canton_id',
        'siglas',
        'sitio_web',
        'enfoque',
        'direccion',
        'latitud',
        'longitud',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function canton()
    {
        return $this->belongsTo(Canton::class);
    }

    /**
     * @return Builder
     */
    public static function builder()
    {
        return IniciativaActor::select('iniciativa_actor.*');
    }

    public static function iniciativaActorNombreLike($search)
    {
        $query = self::builder();

        return $query->where('nombre_organizacion', 'ILIKE', "%$search%")
            ->join('iniciativas', 'iniciativas.iniciativa_actor_id', '=', 'iniciativa_actor.id')
            ->distinct()
            ->whereRaw('iniciativas.deleted_at is null')
            ->get();
    }
}
