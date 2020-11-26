<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class SolucionObservacion extends Model
{
    use SoftDeletes;
    protected $table = 'solucion_observaciones';
    protected $fillable = ['viable','solucion_id','comentario', 'terminos'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function solucionid(){
        return $this->belongsTo('App\Models\Solucion','solucion_id','id');

    }
}
