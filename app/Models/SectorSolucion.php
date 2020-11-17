<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectorSolucion extends Model
{
    //
    protected $table = 'sector_solucion';
    public static $search = null;

    public static function obtenerSectorSolucionAll()
    {
        $query =SectorSolucion::orderby('nombre');
        if (self::$search) {
            $query->orWhere('nombre', 'ilike', '%' . self::$search . '%');
        }
        return $query->get() ?? [];
    }
}
