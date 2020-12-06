<?php

namespace App\Http\Requests\Convocatoria;

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
            'tipoconvocatoria_id' => 'string|required',
            'nombre'=>'string|required|max:250',
            'fecha_inicio' => 'date|required',
            'fecha_cierre' => 'date|required',
            'descripcion' => 'string|required',
            'imagen' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
            'terminos'=>'required|boolean',
            'innovacion_ods1.*'=>'required',
            'innovacion_sector_productivo1.*'=>'required_if:tipoconvocatoria_id,"1"',
            'innovacion_subsector_productivo1.*'=>'required_if:tipoconvocatoria_id,"1"',

            'innovacion_ods2.*'=>'required_if:tipoconvocatoria_id,"2"',

            'innovacion_ods3.*'=>'required',
            'innovacion_sector_productivo3.*'=>'required_if:tipoconvocatoria_id,"3"',
            'innovacion_subsector_productivo3.*'=>'required_if:tipoconvocatoria_id,"3"'
        ];
    }
}
