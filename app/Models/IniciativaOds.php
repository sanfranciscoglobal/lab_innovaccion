<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaOds extends Model
{
    protected $table = 'iniciativa_ods';
    protected $fillable = [
        'iniciativa_actor_id',
        'ods_categoria_id',
    ];
}
