<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelSolucion extends Model
{
    //
    protected $table = 'nivel_solucion';

    public static function obtenernivelsolucionAll()
    {
        $rs = NivelSolucion::orderBy('nombre');
        return $rs->get();
    }
}
