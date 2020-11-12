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
    protected $fillable = ['nombre_publicacion', 'fecha_publicacion', 'tema_tratado', 'tipo_documento', 'imagen_portada', 'fuente_publicacion', 'autor_publicacion', 'tipo','terminos'];
    public static $paginate = 10;
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function articuloss(){
        return $this->hasMany('App\Models\Articulo','material_id','id');

    }
     /**
     * @return Builder
     */
    public static function builder()
    {
        $query = MaterialAprendizaje::orderbyDesc('created_at', 'DESC')->where('user_id',Auth::id());
        // if (self::$search) {
        // }
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



}
