<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Canton;
use Illuminate\Http\Request;

class CantonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'acceso-api']);
    }

    public static function cantonSelect2(Request $request)
    {
        return Canton::obtenerCantonesAgrupadoProvincia($request->search);
    }

    public static function cantonOneSelect2(){
        
    }
}
