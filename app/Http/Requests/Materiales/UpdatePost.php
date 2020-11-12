<?php

namespace App\Http\Requests\Materiales;

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
            //
            'nombre_publicacion' => 'string|required',
            'fecha_publicacion' => 'nullable|date|required_if:tipo,"0"',
            'tema_tratado' => 'string|required',
            'tipo_documento' => 'string|required',
            'tipo' => 'boolean|required',
            //'imagen_portada' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
            'fuente_publicacion' => 'required|string',
            'autor_publicacion' => 'nullable|string|required_if:tipo,"0"',
            'terminos'=>'required|boolean'
        ];
    }
}
