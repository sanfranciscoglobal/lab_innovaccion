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
            'fecha_inicio' => 'date|required',
            'fecha_cierre' => 'date|required|after:fecha_inicio',
            'descripcion' => 'string|required',
            'imagen' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
            'terminos'=>'required|boolean',
            'innovacion_ods.*'=>'required',
            'innovacion_sector_productivo.*'=>'required_if:tipoconvocatoria_id,["1","2"]',
            'innovacion_subsector_productivo.*'=>'required_if:tipoconvocatoria_id,["1","2"]'
        ];
    }
}
