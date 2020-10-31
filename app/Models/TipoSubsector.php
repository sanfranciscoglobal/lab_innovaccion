<?php

namespace App\Models;
use App\Models\TipoSector;

use Illuminate\Database\Eloquent\Model;

class TipoSubsector extends Model
{
    //
    protected $table = 'tipo_subsector';
    public static $listasectores = [];

    public function tiposector()
    {
        return $this->belongsTo(TipoSector::class, 'sector_id', 'id');
    }

    public static function obtenerSubsectores()
    {
        //$query = TipoSubsector::orderbyDesc('nombre')->whereIn('sector_id',self::$listasectores)->get();
        $query = TipoSubsector::all()->whereIn('sector_id',self::$listasectores);
        return $query ?? [];
    }
}
