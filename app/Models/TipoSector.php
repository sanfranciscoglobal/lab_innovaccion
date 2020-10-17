<?php

namespace App\Models;
use App\Models\TipoConvocatoria;

use Illuminate\Database\Eloquent\Model;

class TipoSector extends Model
{
    //
    protected $table = 'tipo_sector';
    //public static $search = null;

    public function tipoconvocatoria()
    {
        return $this->belongsTo(TipoConvocatoria::class, 'convocatoria_id', 'id');
    }
}
