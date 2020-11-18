<?php

namespace App\Models;
use App\Models\TipoSector;

use Illuminate\Database\Eloquent\Model;

class TipoSubsector extends Model
{
    //
    protected $table = 'tipo_subsector';
    public static $listasectores = [];
    public static $search = null;

    public function tiposector()
    {
        return $this->belongsTo(TipoSector::class, 'sector_id', 'id');
    }

    public static function obtenerSubsectores()
    {
        //$query = TipoSubsector::orderbyDesc('nombre')->whereIn('sector_id',self::$listasectores)->get();
        $query =TipoSubsector::orderby('nombre');
        if (self::$search) {
            $query->orWhere('nombre', 'ilike', '%' . self::$search . '%');
        }
        return $query->whereIn('sector_id',self::$listasectores)->get() ?? [];

        // $query = TipoSubsector::all()->whereIn('sector_id',self::$listasectores);
        // return $query ?? [];
    }
}
