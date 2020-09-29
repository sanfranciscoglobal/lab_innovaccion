<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fondo extends Model
{
    use SoftDeletes;

    protected $table = 'fondos';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function test0(){
        return 'ok';
    }
}
