<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Provincia;
use Illuminate\Http\Request;

class Canton extends Model
{
    protected $table = 'canton';
    public static $search = null;

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id');
    }

    public static function obtenerCantones()
    {
        $rs = Canton::orderby('nombre');
        if (self::$search) {
            //$Capitalized=ucfirst(strtolower(self::$search));
            $rs->where('nombre', 'ilike', '%' . self::$search . '%');
        }

        return $rs->get();
    }

    /**
     * @param Request|null $request
     * @return array
     */
    public static function obtenerCantonesAgrupadoProvincia()
    {
        $provincias = Provincia::obtenerProvinciasAll();
        $cantones = Canton::obtenerCantones();
        $result = [];

        foreach ($provincias as $provincia) {
            $children = [];
            foreach ($cantones as $canton) {
                if ($canton->provincia_id == $provincia->id) {
                    $children[] = [
                        'id' => $canton->id,
                        'text' => $canton->nombre,
                    ];
                }
            }

            if ($children) {
                $data['text'] = $provincia->nombre;
                $data['children'] = $children;
                $result[] = $data;
            }
        }

        return $result;
    }
}
