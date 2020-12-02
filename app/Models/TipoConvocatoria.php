<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoConvocatoria extends Model
{
    //
    protected $table = 'tipo_convocatoria';
    public static function obtenerConvocatoriaAll()
    {
        $rs = TipoConvocatoria::orderBy('id');
        return $rs->get();
    }
    public function convocatorias()
    {
        return $this->hasMany('App\Models\Convocatoria', "tipoconvocatoria_id", "id");
    }
}
