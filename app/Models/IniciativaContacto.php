<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaContacto extends Model
{
    protected $table = 'iniciativa_contacto';
    protected $fillable = [
      'iniciativa_id',
      'nombre_persona',
      'celular',
      'correo_electronico',
    ];
}
