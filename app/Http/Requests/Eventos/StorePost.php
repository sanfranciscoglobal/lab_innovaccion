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
            'Nombre' => 'string|required',
            'Organizador' => 'string|required',
            'Fecha' => 'date|required',
            'Hora' => 'time|required',
            'Imagen' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
            'Descripcion' => 'nullable|string',
            'Tipo' => 'boolean|required',
            'Canton' => 'string|nullable',
            'Ubicacion' => 'string|nullable',
            'URL' => 'string|nullable',
            'Estado' => 'boolean|required',
            'user_id' => 'numeric|required'
        ];
    }
}
