<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPropuesta extends Model
{
    //
    protected $table = 'tipo_propuestas';

    public static function obtenertipopropuestaAll()
    {
        $rs = TipoPropuesta::orderBy('nombre');
        return $rs->get();
    }
}
