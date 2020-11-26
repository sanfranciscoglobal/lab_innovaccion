<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
class MaterialComentario extends Model
{
    //
    use SoftDeletes;
    protected $table = 'material_comentarios';
    protected $fillable = ['comentario', 'material_id'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function materialid(){
        return $this->belongsTo('App\Models\MaterialAprendizaje','material_id','id');

    }
}
