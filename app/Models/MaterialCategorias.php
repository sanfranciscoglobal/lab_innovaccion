<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class MaterialCategorias extends Model
{
    //
    protected $table = 'material_categorias';
    public static $search = null;
    public static function obtenermaterialcategoriaAll()
    {
        
        $rs = MaterialCategorias::orderby('nombre');
        if (self::$search) {
            //$Capitalized=ucfirst(strtolower(self::$search));
            $rs->where('nombre', 'ilike', '%' . self::$search . '%');
        }

        return $rs->get();
    }
}
