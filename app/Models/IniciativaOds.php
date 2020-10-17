<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaOds extends Model
{
    protected $table = 'iniciativa_ods';
    protected $fillable = [
        'iniciativa_id',
        'ods_categoria_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function odsCategoria()
    {
        return $this->belongsTo(OdsCategoria::class);
    }
}
