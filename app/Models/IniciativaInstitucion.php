<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaInstitucion extends Model
{
    protected $table = 'iniciativa_institucion';
    protected $fillable = [
        'iniciativa_actor_id',
        'tipo_institucion_id',
    ];
}
