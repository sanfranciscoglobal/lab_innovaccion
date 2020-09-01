<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Provincia;
use Illuminate\Http\Request;

class Canton extends Model
{
    protected $table = 'canton';

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id');
    }

    public static function obtenerCantones($search)
    {
        $rs = Canton::orderby('nombre');

        if ($search) {
            $rs->where('nombre', 'like', '%' . $search . '%');
        }

        return $rs->get();
    }

    /**
     * @param Request|null $request
     * @return array
     */
    public static function obtenerCantonesAgrupadoProvincia($search)
    {
        $provincias = Provincia::obtenerProvincias($search);
        $cantones = Canton::obtenerCantones($search);
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
