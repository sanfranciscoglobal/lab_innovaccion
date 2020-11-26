<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolucionComentario extends Model
{
    protected $table = 'solucion_comentarios';
    protected $fillable = ['comentario', 'solucion_id', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
