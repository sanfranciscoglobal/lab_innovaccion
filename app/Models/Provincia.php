<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincia';

    public static function obtenerProvinciasAll()
    {
        $rs = Provincia::orderBy('nombre');
        return $rs->get();
    }
}
