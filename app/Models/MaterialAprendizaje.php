<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterialAprendizaje extends Model
{
    //
    use SoftDeletes;
    protected $table = 'materialesaprendizaje';
    protected $fillable = ['nombre_publicacion', 'fecha_publicacion', 'tema_tratado', 'tipo_documento', 'imagen_portada', 'fuente_publicacion', 'autor_publicacion', 'terminos'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
