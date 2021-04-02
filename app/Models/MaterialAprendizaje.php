<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Auth;

class MaterialAprendizaje extends Model
{
    //
    use SoftDeletes;
    protected $table = 'materialesaprendizaje';
    protected $fillable = ['nombre_publicacion', 'fecha_publicacion', 'tema_tratado', 'tipo_documento', 'imagen_portada', 'fuente_publicacion', 'autor_publicacion', 'tipo', 'terminos','descripcion_publicacion'];
    public static $paginate = 10;
    public static $own = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Models\MaterialCategorias','tema_tratado','id');
    }
    public function tipodocumento()
    {
        return $this->belongsTo('App\Models\MaterialTipodocumento','tipo_documento','id');
    }

    public function articuloss()
    {
        return $this->hasMany('App\Models\Articulo', 'material_id', 'id');

    }
    public function comentarios()
    {
        return $this->hasMany('App\Models\MaterialComentario', 'material_id', 'id');

    }

    /**
     * @return string|null
     */
    public function getDeletedAtStatusAttribute()
    {
        return ($this->deleted_at) ? true : false;
    }


    /**
     * @return Builder
     */
    public static function builder()
    {
        $query = MaterialAprendizaje::orderbyDesc('created_at', 'DESC');

        if (self::$own) {
            $query->where('user_id', Auth::id());
        }
        return $query;
    }

    /**
     * Obtener paginador de fondos
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerPaginate()
    {
        $rs = self::builder();
        return $rs->paginate(self::$paginate) ?? [];
    }


    /**
     * Obtener paginador de fondos
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerPublicacionesCount()
    {
        return self::builder()->where('tipo', false)->count() ?? 0;
    }

    /**
     *
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerMaterialAprendizajesWithTrashedAll()
    {
        $rs = self::builder();
        return $rs->withTrashed()->get() ?? [];
    }

    /**
     *
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function obtenerMaterialAprendizajeWithTrashedRestore($id)
    {
        if (MaterialAprendizaje::withTrashed()->find($id)->restore()) {
            return true;
        }

        return false;
    }

}
