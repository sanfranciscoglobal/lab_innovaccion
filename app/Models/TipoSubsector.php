<?php

namespace App\Models;
use App\Models\TipoSector;

use Illuminate\Database\Eloquent\Model;

class TipoSubsector extends Model
{
    //
    protected $table = 'tipo_subsector';
    //public static $search = null;

    public function tiposector()
    {
        return $this->belongsTo(TipoSector::class, 'sector_id', 'id');
    }
}
