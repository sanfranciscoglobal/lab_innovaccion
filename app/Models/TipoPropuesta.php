<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPropuesta extends Model
{
    //
    protected $table = 'tipo_propuestas';
    public static $search = null;

    public static function obtenertipopropuestaAll()
    {

        $query =TipoPropuesta::orderby('nombre');
        if (self::$search) {
            $query->orWhere('nombre', 'ilike', '%' . self::$search . '%');
        }
        return $query->get() ?? [];
    }
}
