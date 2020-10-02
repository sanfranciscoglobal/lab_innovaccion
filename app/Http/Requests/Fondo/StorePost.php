<?php

namespace App\Http\Requests\Fondo;

use Illuminate\Foundation\Http\FormRequest;

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
            'fuente' => 'boolean|required',
            'organizacion' => 'string|required',
            'nombre_fondo' => 'string|nullable',
            'info' => 'string|required',
            'fecha_inicio' => 'date|nullable',
            'fecha_fin' => 'date|nullable',
            'facebook' => 'string|nullable',
            'instagram' => 'string|nullable',
            'youtube' => 'string|nullable',
            'linkedin' => 'string|nullable',
            'twitter' => 'string|nullable',
            'imagen' => 'image|mimes:jpeg,png,gif,jpg|max:2048|required',
            'terminos' => 'boolean|required'
        ];
    }
}
