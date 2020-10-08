<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Canton;
use Illuminate\Http\Request;

class CantonController extends Controller
{
    public static function cantonSelect2(Request $request)
    {
        Canton::$search = $request->search;
        return Canton::obtenerCantonesAgrupadoProvincia();
    }
}
