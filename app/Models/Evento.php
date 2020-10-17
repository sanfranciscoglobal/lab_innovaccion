<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Evento extends Model
{
    //
    use SoftDeletes;
    protected $table = 'eventos';
    protected $fillable = ['nombre', 'organizador', 'fecha', 'hora', 'imagen', 'descripcion', 'tipo', 'canton', 'ubicacion', 'org_lat','org_long','url','terminos'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function cantonid(){
        return $this->belongsTo('App\Models\Canton', "canton","id");
    }

}
