<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaInstitucion extends Model
{
    protected $table = 'iniciativa_institucion';
    protected $fillable = [
        'iniciativa_id',
        'tipo_institucion_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoInstitucion()
    {
        return $this->belongsTo(TipoInstitucion::class);
    }
}
