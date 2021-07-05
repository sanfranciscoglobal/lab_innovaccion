<?php

namespace App\Models;

use App\Helpers\Archivos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

class Iniciativas extends Model
{
    use SoftDeletes;

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

    public static $similar_data = [];
    public static $similar_nombre_organizacion = [];
    public static $similar_sitio_web = [];
    public static $similar_iniciativa = [];
    public static $similar_componente = [];
    public static $similar_contacto = [];

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
    public function iniciativaOrigen()
    {
        return $this->belongsTo(IniciativaOrigen::class, 'iniciativa_origen_id');
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

    public function iniciativaPoblacionesCompleto()
    {
        return $this->belongsToMany(TipoPoblacion::class, 'iniciativa_poblacion',
            'id', 'tipo_poblacion_id');
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
    public function getIniciativaActorEnfoqueAttribute()
    {
        return ($this->iniciativaActor) ? $this->iniciativaActor->enfoque : null;
    }

    /**
     * @return string|null
     */
    public function getIniciativaActorSitioWebAttribute()
    {
        return ($this->iniciativaActor) ? $this->iniciativaActor->sitio_web : null;
    }

    /**
     * @return string|null
     */
    public function getIniciativaUbicacionesCantonNombresAttribute()
    {
        $cantones = [];
        if ($this->iniciativaUbicaciones) {
            foreach ($this->iniciativaUbicaciones as $ubicacion) {
                $cantones[$ubicacion->canton->nombre] = $ubicacion->canton->nombre;
            }
        }

        return implode(', ', $cantones);
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
        return ($this->iniciativaInformacion) ? Archivos::validarUrlImagenIniciativa($this->iniciativaInformacion->logo) : null;
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
    public function getComponenteInnovadorAttribute()
    {
        return ($this->iniciativaInformacion) ? $this->iniciativaInformacion->componente_innovador : null;
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
     * @return string|null
     */
    public function getIniciativaOrigenDescripcionAttribute()
    {
        return ($this->iniciativaOrigen) ? $this->iniciativaOrigen->descripcion : null;
    }

    /**
     * @return string|null
     */
    public function getUserImagenAttribute()
    {
        return ($this->user->perfilUser) ? $this->user->perfilUser->avatar : null;
    }

    /**
     * @return string|null
     */
    public function getDeletedAtStatusAttribute()
    {
        return ($this->deleted_at) ? true : false;
    }

    /**
     * @return string|null
     */
    public function getSimilarNombreOrganizacionAttribute()
    {
        $id = array_key_first(self::$similar_nombre_organizacion);
        return isset(self::$similar_nombre_organizacion[$id]) ? [
            'id' => $id,
            'value' => round(self::$similar_nombre_organizacion[$id], 0)
        ] : null;
    }

    /**
     * @return string|null
     */
    public function getSimilarSitioWebAttribute()
    {
        $id = array_key_first(self::$similar_sitio_web);
        return isset(self::$similar_sitio_web[$id]) ? [
            'id' => $id,
            'value' => round(self::$similar_sitio_web[$id], 0)
        ] : null;
    }

    /**
     * @return string|null
     */
    public function getSimilarIniciativaAttribute()
    {
        $id = array_key_first(self::$similar_iniciativa);
        return isset(self::$similar_iniciativa[$id]) ? [
            'id' => $id,
            'value' => round(self::$similar_iniciativa[$id], 0)
        ] : null;
    }

    /**
     * @return string|null
     */
    public function getSimilarComponenteAttribute()
    {
        $id = array_key_first(self::$similar_componente);
        return isset(self::$similar_componente[$id]) ? [
            'id' => $id,
            'value' => round(self::$similar_componente[$id], 0)
        ] : null;
    }

    /**
     * @return string|null
     */
    public function getSimilarContactoAttribute()
    {
        return null;
    }

    /**
     * @return Builder
     */
    public static function builderIniciativa()
    {
        $query = Iniciativas::select('iniciativas.*')
            ->join('iniciativa_informacion', 'iniciativa_informacion.id', '=', 'iniciativas.iniciativa_informacion_id')
            ->leftJoin('iniciativa_actor', 'iniciativa_actor.id', '=', 'iniciativas.iniciativa_actor_id')
            ->orderBy('created_at', request('created_at', 'DESC'));

        //$query->with('iniciativaActor', 'iniciativaInformacion');

        if (self::$search) {
            $query->orWhere('iniciativa_actor.nombre_organizacion', 'ilike', '%' . self::$search . '%');
            $query->orWhere('iniciativa_actor.enfoque', 'ilike', '%' . self::$search . '%');
            $query->orWhere('iniciativa_informacion.nombre_iniciativa', 'ilike', '%' . self::$search . '%');
            $query->orWhere('iniciativa_informacion.componente_innovador', 'ilike', '%' . self::$search . '%');
            $query->orWhere('iniciativa_informacion.descripcion_iniciativa', 'ilike', '%' . self::$search . '%');
        }

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

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerIniciativasAll()
    {
        $rs = self::builderIniciativa();
        return $rs->get() ?? [];
    }

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerIniciativasUserPaginate(User $user)
    {
        $rs = self::builderIniciativa();
        $rs->where('user_id', (is_object($user)) ? $user->id : $user);
        return $rs->paginate(self::$paginate) ?? [];
    }

    /**
     * @return int
     */
    public static function obtenerIniciativasCount()
    {
        return self::builderIniciativa()->count() ?? 0;
    }

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerIniciativasWithTrashedAll()
    {
        $rs = self::builderIniciativa();
        return $rs->withTrashed()->get() ?? [];
    }

    /**
     * Obtener paginador de iniciativas
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerIniciativaWithTrashedRestore($id)
    {
        if (Iniciativas::withTrashed()->find($id)->restore()) {
            return true;
        }

        return false;
    }


    public static function obtenerIniciativasIndividualesCount()
    {
        return self::builderIniciativa()
                ->where('iniciativa_origen_id', 2)
                ->count() ?? 0;
    }

}
