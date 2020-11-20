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
            'organizacion' => 'string|required|max:250',
            'nombre_fondo' => 'string|nullable|required_if:fuente,1|max:250',
            'info' => 'string|required|max:250',
            'fecha_inicio' => 'date|nullable|required_if:fuente,1',
            'fecha_fin' => 'date|nullable|required_if:fuente,1|after:fecha_inicio',
            'facebook' => 'string|nullable|max:250',
            'instagram' => 'string|nullable|max:250',
            'youtube' => 'string|nullable|max:250',
            'linkedin' => 'string|nullable|max:250',
            'twitter' => 'string|nullable|max:250',
            'imagen' => 'image|mimes:jpeg,png,gif,jpg|max:2048|nullable',
            'terminos' => 'boolean|required'
        ];
    }
}
