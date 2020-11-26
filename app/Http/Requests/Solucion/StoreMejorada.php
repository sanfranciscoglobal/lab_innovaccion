<?php

namespace App\Http\Requests\Solucion;

use Illuminate\Foundation\Http\FormRequest;

class StoreMejorada extends FormRequest
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
            'descripcion' => 'string|max:1000|required',
            'tiempo' => 'string|max:280|required',
            'equipo' => 'string|max:1000|required',
            'recursos' => 'string|max:1000|required',
            'modelo' => 'string|max:1000|required',
            'financiamiento' => 'string|max:280|required',
            'archivo' => 'file|max:10240|mimes:pdf|nullable',
            'terminos' => 'boolean|required',
        ];
    }
}
