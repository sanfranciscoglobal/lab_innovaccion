<?php

namespace App\Http\Requests\Problema;

use Illuminate\Foundation\Http\FormRequest;

class Store1Post extends FormRequest
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
            'convocatoria_id' => ['numeric', 'exists:convocatorias,id', 'required'],
            'tipo_convocatoria_id' => ['numeric', 'exists:tipo_convocatoria,id', 'required'],
            'sector' => ['bool', 'required_unless:tipo_convocatoria_id,2'],
            'subsector' => ['bool', 'required_unless:tipo_convocatoria_id,2'],
            'confidencial' => ['bool', 'required'],
            'recomendaciones' => ['bool', 'required_if:tipo_convocatoria_id,1', 'nullable'],
            'datos' => ['bool', 'required'],
            'actividad' => ['string', 'min:10', 'max:400', 'required_if:tipo_convocatoria_id,1', 'nullable'],
            'problema' => ['string', 'min:10', 'max:500', 'required'],
            'archivo' => ['file', 'max:10240', 'mimes:pdf', 'nullable']
        ];
    }
}
