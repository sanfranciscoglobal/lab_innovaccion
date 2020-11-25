<?php

namespace App\Http\Requests\Solucion;

use Illuminate\Foundation\Http\FormRequest;

class ObservacionPost extends FormRequest
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
            'viable'=>['bool','required'],
            'solucion_id'=>['int','required'],
            'comentario'=>['string','required'],
            'terminos'=>['int','required']
        ];
    }
}
