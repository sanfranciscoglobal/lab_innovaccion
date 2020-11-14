<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectorSolucion extends Model
{
    //
    protected $table = 'sector_solucion';

    public static function obtenersectorsolucionAll()
    {
        $rs = SectorSolucion::orderBy('nombre');
        return $rs->get();
    }
}
