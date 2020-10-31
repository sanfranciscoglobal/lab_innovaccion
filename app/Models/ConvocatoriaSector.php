<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConvocatoriaSector extends Model
{
    //
    use SoftDeletes;
    protected $table = 'convocatorias_sectores';
    protected $fillable = ['convocatoria_id', 'sector_id'];

    public function convocatoriaid(){
        return $this->belongsTo('App\Models\Convocatoria', "convocatoria_id","id");
    }
    public function sectorid(){
        return $this->belongsTo('App\Models\TipoSector', "sector_id","id");
    }
}
