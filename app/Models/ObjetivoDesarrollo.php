<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjetivoDesarrollo extends Model
{
    //
    protected $table = 'objetivosdesarrollo';
    public static function obtenerObjetivosAll()
    {
        $rs = ObjetivoDesarrollo::orderBy('id');
        return $rs->get();
    }
}
