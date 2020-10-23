<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Iniciativas extends Model
{
    public static $paginate = 10;
    public static $search = null;
    public static $search_canton_id = [];
    public static $search_tipo_institucion = [];
    public static $search_ods_categorias = [];
    public static $search_tipo_poblacion = [];
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
        // $query->with('iniciativaActor', 'iniciativaInformacion');

        if (self::$search_canton_id) {
            $query->whereIn('iniciativas.id', function ($query) {
                $query->select('iniciativa_id')
                    ->from('iniciativa_ubicacion')
                    ->whereIn('iniciativa_ubicacion.canton_id', self::$search_canton_id);
            });
        }

        if (self::$search_tipo_institucion) {
            $query->whereIn('iniciativas.id', function ($query) {
                $query->select('iniciativa_id')
                    ->from('iniciativa_institucion')
                    ->whereIn('iniciativa_institucion.tipo_institucion_id', self::$search_tipo_institucion);
            });
        }

        if (self::$search_ods_categorias) {
            $query->whereIn('iniciativas.id', function ($query) {
                $query->select('iniciativa_id')
                    ->from('iniciativa_ods')
                    ->whereIn('iniciativa_ods.ods_categoria_id', self::$search_ods_categorias);
            });
        }

        if (self::$search_tipo_poblacion) {
            $query->whereIn('iniciativas.id', function ($query) {
                $query->select('iniciativa_id')
                    ->from('iniciativa_poblacion')
                    ->whereIn('iniciativa_poblacion.tipo_poblacion_id', self::$search_tipo_poblacion);
            });
        }

//        dd($query->toSql());
//
//        dd(self::$search_canton_id, self::$search_tipo_poblacion, self::$search_ods_categorias, self::$search_tipo_institucion);

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
