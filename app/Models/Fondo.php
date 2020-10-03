<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fondo extends Model
{
    use SoftDeletes;

    protected $table = 'fondos';
    protected $fillable = ['fuente', 'organizacion', 'nombre_fondo', 'info', 'fecha_inicio', 'fecha_fin', 'facebook', 'instagram', 'youtube', 'linkedin', 'twitter', 'imagen', 'terminos'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
