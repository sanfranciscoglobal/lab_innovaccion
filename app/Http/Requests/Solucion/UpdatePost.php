<?php

namespace App\Http\Requests\Solucion;

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
            'problema_id'=>['int','required'],
            'convocatoria_id'=>['int','required'],
            'sectorsolucion_id' => ['int','required'],
            'nombre' => ['string','required'],
            'descripcion'=>['string','required'],
            'estado_descrip'=>['bool','required'],
            'archivo'=>['file', 'max:10240', 'mimes:pdf', 'nullable']
        ];
    }
}
