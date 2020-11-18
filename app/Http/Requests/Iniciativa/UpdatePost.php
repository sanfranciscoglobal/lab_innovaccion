<?php

namespace App\Http\Requests\Iniciativa;

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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public static function myRules()
    {
        return [
            'iniciativa_propiedad' => 'required',

            'nombre_organizacion' => 'nullable',
            'siglas' => 'nullable',
            'sitio_web' => 'nullable',
            'enfoque' => 'nullable',
            'direccion' => 'nullable',
            'canton_id' => 'nullable',
            'direccion' => 'nullable',
            'nombre_iniciativa' => 'required',
            'anio' => 'required',
            'Ubicaciones' => 'required',
            'componente_innovador' => 'required',
            'descripcion_iniciativa' => 'required',
            'url_facebook' => 'nullable',
            'url_instagram' => 'nullable',
            'url_twitter' => 'nullable',
            'url_linkedin' => 'nullable',
            'url_youtube' => 'nullable',
            'latitud' => 'nullable',
            'longitud' => 'nullable',
            'vigencia' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->myRules();
    }
}
