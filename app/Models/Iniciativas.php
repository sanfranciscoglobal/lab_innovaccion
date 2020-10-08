<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iniciativas extends Model
{
    protected $table = 'iniciativas';
    protected $fillable = [
        'estado_registro_id',
        'iniciativa_origen_id',
        'iniciativa_actor_id',
        'iniciativa_informacion_id',
    ];
}
