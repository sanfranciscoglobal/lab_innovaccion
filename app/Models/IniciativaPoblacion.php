<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaPoblacion extends Model
{
    protected $table = 'iniciativa_poblacion';
    protected $fillable = [
        'iniciativa_id',
        'tipo_poblacion_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoPoblacion()
    {
        return $this->belongsTo(TipoPoblacion::class);
    }
}
