<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solucion extends Model
{
    //
    use SoftDeletes;
    protected $table = 'soluciones';
    protected $fillable = ['problema_id', 'sectorsolucion_id', 'nombre', 'descripcion', 'imagen', 'descripcion', 'estado_descrip', 'archivo', 'nivelsolucion_id', 'concepto1',
    'concepto2','concepto3','telefono','web','facebook','instagram','linkededin','twitter','youtube','terminos'];
    public static $paginate = 10;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function problemaid(){
        return $this->belongsTo('App\Models\Problema', "problema_id","id");
    }
    public function sectorsolucionid(){
        return $this->belongsTo('App\Models\SectorSolucion', "sectorsolucion_id","id");
    }
    public function nivelsolucionid(){
        return $this->belongsTo('App\Models\NivelSolucion', "nivelsolucion_id","id");
    }
    public function tipopropuestas(){
        return $this->hasMany('App\Models\Soluciontipoinnova','solucion_id','id');

    }
}
