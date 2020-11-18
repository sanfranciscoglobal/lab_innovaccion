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
        $query =TipoSector::orderby('nombre');
        if (self::$search) {
            $query->orWhere('nombre', 'ilike', '%' . self::$search . '%');
        }
        return $query->where('convocatoria_id',$id)->get() ?? [];
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
   
    
}
