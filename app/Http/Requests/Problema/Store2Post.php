<?php

namespace App\Http\Requests\Problema;

use Illuminate\Foundation\Http\FormRequest;

class Store2Post extends FormRequest
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
    public static function rules()
    {
        return [
            'causas.*' => ['string', 'min:10', 'max:280', 'required'],
            'efectos.*' => ['string', 'min:10', 'max:280', 'required'],
            'eslabon' => ['', 'required_if:tipo_convocatoria_id,1', 'nullable'],
            'grupo_social' => ['string', 'required_unless:tipo_convocatoria_id,1', 'max:280'],
            'descripcion_grupo' => ['string', 'min:10', 'max:500', 'required'],
            'keyword.*' => ['string', 'min:3', 'max:50', 'required']
        ];
    }
}
