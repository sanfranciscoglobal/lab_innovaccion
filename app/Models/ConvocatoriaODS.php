<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConvocatoriaODS extends Model
{
    //
    use SoftDeletes;
    protected $table = 'convocatorias_ods';
    protected $fillable = ['convocatoria_id', 'ods_id'];

    public function convocatoriaid(){
        return $this->belongsTo('App\Models\Convocatoria', "convocatoria_id","id");
    }
    public function objetivoid(){
        return $this->belongsTo('App\Models\ObjetivoDesarrollo', "ods_id","id");
    }
}
