<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaInformacion extends Model
{
    protected $table = 'iniciativa_informacion';
    protected $fillable = [
        'nombre_iniciativa',
        'anio',
        'nombre_vigencia',
        'logo',
        'componente_innovador',
        'descripcion_iniciativa',
        'url_facebook',
        'url_twitter',
        'url_linkedin',
        'url_youtube',
        'url_instagram',
    ];
}
