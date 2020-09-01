<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacto\StorePost;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacto(Request $request)
    {
        $contacto = new Contacto();
        return view('aplicacion.contact.index', compact('contacto'));
    }

    public function store(StorePost $request)
    {
        $requestData = $request->validated();
        $validator = Validator::make($requestData, StorePost::myRules());

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($model = Contacto::create($requestData)) {
            return back()->with('status', 'Contacto enviado con exito');
        }
    }

}