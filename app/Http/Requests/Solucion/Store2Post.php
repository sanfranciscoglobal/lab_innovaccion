<?php

namespace App\Http\Requests\Solucion;

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
    public function rules()
    {
        return [
            //
            'tipo_institucion.*'=>'required',
            'nivelsolucion_id'=>'int|required',
            'concepto1'=>'required|string',
            'concepto2'=>'required|string',
            'concepto3'=>'required|string'
        ];
    }
}
