<?php

namespace App\Http\Requests\Solucion;

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
            //
            'sectorsolucion_id' => 'int|required',
            'nombre' => 'string|required',
            'descripcion'=>'string|required',
            // 'estado_descrip'=>
            'archivo'=>'nullable|string'
      
        ];
    }
}
