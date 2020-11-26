<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class SolucionMejorada extends Model
{
    use SoftDeletes;

    protected $table = 'solucion_mejorada';
    protected $fillable = ['descripcion', 'tiempo', 'equipo', 'recursos', 'modelo', 'financiamiento', 'archivo', 'terminos', 'solucion_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function solucion(){
        return $this->belongsTo('App\Models\Solucion');

    }
}
