<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaUbicacion extends Model
{
    protected $table = 'iniciativa_ubicacion';
    protected $fillable = [
        'iniciativa_id',
        'canton_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function canton()
    {
        return $this->belongsTo(Canton::class);
    }
}
