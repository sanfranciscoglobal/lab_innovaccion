<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelSolucion extends Model
{
    //
    protected $table = 'nivel_solucion';
    public static $search = null;
    public static function obtenerNivelSolucionAll()
    {
        $query =NivelSolucion::orderby('nombre');
        if (self::$search) {
            $query->orWhere('nombre', 'ilike', '%' . self::$search . '%');
        }
        return $query->get() ?? [];
    }
}
