<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoRegistro extends Model
{
    use SoftDeletes;

    protected $table = 'estado_registro';


    /**
     * @return mixed
     */
    public static function obtenerEstadoRegistroRevision()
    {
        return EstadoRegistro::where('codigo', 'RE')->first();
    }

    /**
     * @return mixed
     */
    public static function obtenerEstadoRegistroAprobado()
    {
        return EstadoRegistro::where('codigo', 'AP')->first();
    }

    /**
     * @return mixed
     */
    public static function obtenerEstadoRegistroCancelado()
    {
        return EstadoRegistro::where('codigo', 'NP')->first();
    }
}
