<?php

namespace App\Http\Requests\Solucion;

use Illuminate\Foundation\Http\FormRequest;

class Store3Post extends FormRequest
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
            //
            'telefono'=>'string|required',
            'web'=>'nullable|string',
            'facebook'=>'nullable|string',
            'instagram'=>'nullable|string',
            'linkedin'=>'nullable|string',
            'twitter'=>'nullable|string',
            'youtube'=>'nullable|string',
            'terminos'=>'bool|required',
        ];
    }
}
