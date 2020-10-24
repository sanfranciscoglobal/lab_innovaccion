<?php

namespace App\Http\Requests\Problema;

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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tipo_convocatoria_id' => ['numeric', 'exists:ipo_convocatoria_id,id', 'required'],
            'sector' => ['bool', 'required_unless:tipo_convocatoria_id,2'],
            'subsector' => ['bool', 'required_unless:tipo_convocatoria_id,2'],
            'confidencial' => ['bool', 'required'],
            'recomendaciones' => ['bool', 'required_if:tipo_convocatoria_id,1', 'nullable'],
            'datos' => ['bool', 'required'],
            'actividad' => ['string', 'min:10', 'max:400', 'required_if:tipo_convocatoria_id,1', 'nullable'],
            'problema' => ['string', 'min:10', 'max:500', 'required'],
            'archivo' => ['file', 'nullable'],
            'causas.*' => ['string', 'min:10', 'max:280', 'required'],
            'efectos.*' => ['string', 'min:10', 'max:280', 'required'],
            'eslabon' => ['', 'required_if:tipo_convocatoria_id,1', 'nullable'],
            'grupo_social' => ['string', 'required_unless:tipo_convocatoria_id,1'],
            'descripcion_grupo' => ['string', 'min:10', 'max:500', 'required'],
            'keyword.*' => ['string', 'min:3', 'max:50', 'required'],
            'telefono' => ['string', 'min:7', 'max:20', 'required'],
            'web' => ['url', 'nullable'],
            'facebook' => ['url', 'nullable'],
            'instagram' => ['url', 'nullable'],
            'linkedin' => ['url', 'nullable'],
            'twitter' => ['url', 'nullable'],
            'youtube' => ['url', 'nullable'],
            'imagen' => ['image', 'max_size:10mb', 'nullable'],
            'canton_id' => ['numeric', 'exists:canton,id', 'required'],
            'ubicacion' => ['string', 'min:10', 'max:280', 'required'],
            'latitud' => ['numeric', 'required'],
            'longitud' => ['numeric', 'required'],
            'terminos' => ['bool', 'required']
        ];
    }
}
