<?php

namespace App\Helpers;

use Carbon\Carbon;

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

}