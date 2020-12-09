<?php

namespace App\Http\Requests\Eventos;

use Illuminate\Foundation\Http\FormRequest;
//Definir validaciones
class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validicion
            //
            'nombre' => 'string|required',
            'organizador' => 'string|required',
            'fecha' => 'date|required',
            'hora' => 'string|required',
            'imagen' => 'required|image|mimes:jpeg,png,gif,jpg|max:2000',
            'descripcion' => 'string|required',
            'tipo' => 'boolean|required',
            'canton' => 'nullable|required_if:tipo,"1"|string',
            'area1' => 'nullable|required_if:tipo,"1"|string',
            'area2' => 'nullable|required_if:tipo,"1"|string',
            'sitioweb'=>'nullable|string',
            'ubicacion' => 'nullable|required_if:tipo,"1"|string',
            'org_lat' => 'nullable|required_if:tipo,"1"|string',
            'org_long'=> 'nullable|required_if:tipo,"1"|string',
            'url' => 'nullable|string|required_if:tipo,"0"',
            'estado' => 'boolean',
            'terminos'=>'required|boolean'
        ];
    }
}
