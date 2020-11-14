<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;

class Helper
{

    /**
     * @param string $fecha
     * @param string $format
     * @return string
     */
    public static function formatDate($fecha, $format = 'M d Y')
    {
        return Carbon::createFromFormat('Y-m-d', $fecha)->format($format);
    }

    /**
     * @return bool
     */
    public static function validarUsuarioAdmin()
    {
        if ($roles = json_decode(Cookie::get('roles'))) {
            foreach ($roles as $rol) {
                if (in_array(strtolower(trim($rol)), ['superadmin','admin'])){
                    return true;
                }
            }
        }

        return false;
    }

}