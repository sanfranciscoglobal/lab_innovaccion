<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
class MaterialTipodocumento extends Model
{
    //
    protected $table = 'material_tipodocumentos';
    public static $search = null;
    public static $tipo = 0;
    

    public static function builderMaterialTipo()
    {
        $rs = MaterialTipodocumento::orderby('nombre')->where('tipo',self::$tipo);
        if (self::$search) {
            //$Capitalized=ucfirst(strtolower(self::$search));
            $rs->where('nombre', 'ilike', '%' . self::$search . '%');
        }

        return $rs;
    }

    /**
     * @return array|\Illuminate\Support\Collection
     */
    public static function obtenermaterialtipoAll()
    {

        return self::builderMaterialTipo()->get() ?? [];
 
    }


}
