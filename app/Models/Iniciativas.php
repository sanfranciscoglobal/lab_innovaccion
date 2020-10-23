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
    public function user()
    {
        return $this->belongsTo(User::class);
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function iniciativaContactos()
    {
        return $this->hasMany(IniciativaContacto::class, 'iniciativa_id', 'id');
    }

    /**
     * @return string|null
     */
    public function getNombreOrganizacionAttribute()
    {
        return ($this->iniciativaActor) ? $this->iniciativaActor->nombre_organizacion : null;
    }

    /**
     * @return string|null
     */
    public function getEnfoqueAttribute()
    {
        return ($this->iniciativaActor) ? $this->iniciativaActor->enfoque : null;
    }

    /**
     * @return string|null
     */
    public function getNombreIniciativaAttribute()
    {
        return ($this->iniciativaInformacion) ? $this->iniciativaInformacion->nombre_iniciativa : null;
    }

    /**
     * @return string|null
     */
    public function getLogoAttribute()
    {
        return ($this->iniciativaInformacion) ? $this->iniciativaInformacion->logo : null;
    }

    /**
     * @return string|null
     */
    public function getDescripcionIniciativaAttribute()
    {
        return ($this->iniciativaInformacion) ? $this->iniciativaInformacion->descripcion_iniciativa : null;
    }

    /**
     * @return string|null
     */
    public function getUserNameAttribute()
    {
        return ($this->user) ? $this->user->name : null;
    }

    /**
     * @return string|null
     */
    public function getUserEmailAttribute()
    {
        return ($this->user) ? $this->user->email : null;
    }

    /**
     * @return string|null
     */
    public function getUserCelularAttribute()
    {
        return ($this->user->perfilUser) ? $this->user->perfilUser->celular : null;
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
