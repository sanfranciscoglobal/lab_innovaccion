<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaPoblacion extends Model
{
    protected $table = 'iniciativa_poblacion';
    protected $fillable = [
        'iniciativa_actor_id',
        'tipo_poblacion_id',
    ];
}
