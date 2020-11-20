<?php

namespace App\Http\Requests\Materiales;

use Illuminate\Foundation\Http\FormRequest;

class ComentarioPost extends FormRequest
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
            'nombre_user' => 'string|required',
            'correo_user' => 'string|required',
            'comentario' => 'string|required',
            'material_id'=> 'int|required'
        ];
    }
}
