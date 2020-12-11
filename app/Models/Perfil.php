<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perfil extends Model
{
    use SoftDeletes;

    protected $table = 'perfil';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'celular', 'proposito', 'tipo_reg', 'organizacion', 'tipo_org', 'direccion', 'canton_id', 'latitud', 'longitud', 'web', 'facebook', 'instagram', 'linkedin', 'twitter', 'terminos'
    ];

    public function canton()
    {
        return $this->belongsTo('App\Models\Canton');
    }

    public function institucion(){
        return $this->belongsTo('App\Models\TipoInstitucion', 'tipo_org');
    }
}
