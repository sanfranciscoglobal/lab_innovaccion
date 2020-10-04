<?php

namespace App\Http\Requests\Fondo;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePost extends FormRequest
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
            'nombre_fondo' => 'string|required_if:fuente,true',
            'info' => 'string|required',
            'fecha_inicio' => 'date|nullable|required_if:fuente,true',
            'fecha_fin' => 'date|nullable|required_if:fuente,true',
            'facebook' => 'string|nullable',
            'instagram' => 'string|nullable',
            'youtube' => 'string|nullable',
            'linkedin' => 'string|nullable',
            'twitter' => 'string|nullable',
            'imagen' => 'image|mimes:jpeg,png,gif,jpg|max:2048|nullable',
            'terminos' => 'boolean|required'
        ];
    }
}
