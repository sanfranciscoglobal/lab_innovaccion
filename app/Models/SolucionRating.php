<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolucionRating extends Model
{
    protected $table = 'solucion_rating';
    protected $fillable = ['rating', 'solucion_id', 'user_id'];
}
