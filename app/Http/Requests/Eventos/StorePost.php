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
            'hora' => 'time|required',
            'imagen' => 'required|image|mimes:jpeg,png,gif,jpg|max:2048',
            'descricion' => 'required|string',
            'tipo' => 'boolean|required',
            'canton' => 'string|required_if:tipo,True',
            'ubicacion' => 'string|required_if:tipo,True',
            'url' => 'string|required_if:Tipo,False',
            'estado' => 'boolean|required',
            'user_id' => 'numeric|required'

        ];
    }
}
