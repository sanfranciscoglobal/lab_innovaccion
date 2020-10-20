<?php

namespace App\Http\Requests\Iniciativa;

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
            'nombre_vigencia' => 'required',
            'componente_innovador' => 'required',
            'descripcion_iniciativa' => 'required',
            'url_facebook' => 'nullable',
            'url_instagram' => 'nullable',
            'url_twitter' => 'nullable',
            'url_linkedin' => 'nullable',
            'url_youtube' => 'nullable',
            'latitud' => 'nullable',
            'longitud' => 'nullable'
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
