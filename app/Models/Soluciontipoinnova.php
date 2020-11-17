<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soluciontipoinnova extends Model
{
    //
    use SoftDeletes;
    protected $table = 'soluciontipoinnovas';
    protected $fillable = ['solucion_id', 'tipoinnovacion_id'];
    public function solucionid(){
        return $this->belongsTo('App\Models\Solucion', "solucion_id","id");
    }
    public function tipoinnovacionid(){
        return $this->belongsTo('App\Models\TipoPropuesta', "tipoinnovacion_id","id");
    }

}
