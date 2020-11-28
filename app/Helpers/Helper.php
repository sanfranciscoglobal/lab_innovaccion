<?php

namespace App\Helpers;

use App\Models\Canton;
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
        if ($roles = json_decode(session()->get('roles'))) {
            foreach ($roles as $rol) {
                if (in_array(strtolower(trim($rol)), ['superadmin', 'admin'])) {
                    return true;
                }
            }
        }

        return false;
    }


    /**
     * @param string $localidad
     * @param string $area
     * @param string $area2
     * @return Canton|array|bool
     */
    public static function obtenerCiudadPorLocalidad($localidad, $area, $area2)
    {
        $localidad = mb_strtolower(trim($localidad));
        $area = mb_strtolower(trim($area));
        $area2 = mb_strtolower(trim($area2));

        if ($ciudad = Canton::obtenerCantonNombre($localidad)) {
            return $ciudad;
        }

        if ($ciudad = Canton::obtenerCantonNombre($area)) {
            return $ciudad;
        }

        if ($ciudad = Canton::obtenerCantonNombre($area2)) {
            return $ciudad;
        }

        return false;
    }

    /**
     * @param $estado
     * @return string
     */
    public static function obtenerEtiquetaEstado($estado)
    {
        if ($estado) {
            return '<span class="badge badge-pill badge-danger">ELIMINADO</span>';
        } else {
            return '<span class="badge badge-pill badge-success">ACTIVO</span>';
        }
    }

    public static function returnAdmin()
    {
        if (session()->has('admin')) {
            return session()->get('admin');
        }

        return false;
    }
}