<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Problema extends Model
{
    use SoftDeletes;

    protected $table = 'problemas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_convocatoria_id', 'sector', 'subsector', 'confidencial', 'recomendaciones', 'datos', 'actividad', 'problema', 'archivo',     'telefono', 'web', 'facebook', 'instagram', 'linkedin', 'twitter', 'youtube', 'imagen', 'canton_id', 'ubicacion', 'latitud', 'longitud', 'terminos'
    ];

    public function tipo_convocatoria(){
        return $this->belongsTo('App\Models\TipoConvocatoria');
    }

    public function canton(){
        return $this->belongsTo('App\Models\Canton');
    }
}
