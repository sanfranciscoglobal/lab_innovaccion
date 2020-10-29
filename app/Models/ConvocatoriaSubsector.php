<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConvocatoriaSubsector extends Model
{
    //
    use SoftDeletes;
    protected $table = 'convocatorias_subsectores';
    protected $fillable = ['convocatoria_id', 'subsector_id'];

    public function convocatoriaid(){
        return $this->belongsTo('App\Models\Convocatoria', "convocatoria_id","id");
    }
    public function subsectorid(){
        return $this->belongsTo('App\Models\TipoSubsector', "subsector_id","id");
    }
}
