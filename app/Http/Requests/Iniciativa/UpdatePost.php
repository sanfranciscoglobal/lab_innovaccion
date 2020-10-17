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
            'nombre_organizacion' => 'required',
            'siglas' => 'required',
            'sitio_web' => 'required',
//            'tipo_institucion' => 'required',
            'enfoque' => 'required',
//            'ubicaciones' => 'required',
            'canton_id' => 'required',
            'direccion' => 'required',
            'nombre_iniciativa' => 'required',
            'anio' => 'required',
            'nombre_vigencia' => 'required',
//            'tipo_poblacion' => 'required',
//            'ods_categorias' => 'required',
            'componente_innovador' => 'required',
            'descripcion_iniciativa' => 'required',
            'url_facebook' => 'nullable',
            'url_instagram' => 'nullable',
            'url_twitter' => 'nullable',
            'url_linkedin' => 'nullable',
            'url_youtube' => 'nullable',
            'latitud' => 'nullable',
            'longitud' => 'nullable',
//            'iniciativa_contacto' => '',
//            'iniciativa_verificada' => 'on',
//            'name' => 'required|max:250',
//            'email' => 'required|email|max:250',
//            'subject' => 'required|max:250',
//            'message' => 'required|max:250'
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
