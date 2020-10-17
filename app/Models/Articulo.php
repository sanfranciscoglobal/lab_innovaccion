<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    //
    use SoftDeletes;
    protected $table = 'articulos';
    protected $fillable = ['nombre', 'material_id'];

}
