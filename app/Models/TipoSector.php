<?php

namespace App\Models;
use App\Models\TipoConvocatoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class TipoSector extends Model
{
    
    public static $search = null;
    protected $table = 'tipo_sector';
    

    public function tipoconvocatoria()
    {
        return $this->belongsTo(TipoConvocatoria::class, 'convocatoria_id', 'id');
    }

     /**
     * @return Builder
     */ 
    public static function obtenerSectorAll($id)
    {
        $query =TipoSector::all()->where('convocatoria_id',$id);
        if (self::$search) {
            //$query->orWhere('descripcion', 'like', '%' . self::$search . '%');
        }
        return $query ?? [];
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
   
    
}
