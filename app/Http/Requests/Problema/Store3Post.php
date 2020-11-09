<?php

namespace App\Http\Requests\Problema;

use Illuminate\Foundation\Http\FormRequest;

class Store3Post extends FormRequest
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
            'telefono' => ['string', 'min:7', 'max:20', 'required'],
            'web' => ['url', 'nullable'],
            'facebook' => ['url', 'nullable'],
            'instagram' => ['url', 'nullable'],
            'linkedin' => ['url', 'nullable'],
            'twitter' => ['url', 'nullable'],
            'youtube' => ['url', 'nullable'],
            'imagen' => ['image', 'max:1024', 'mimes:jpg, jpeg, png', 'nullable'],
            'canton_id' => ['numeric', 'exists:canton,id', 'nullable'],
            'ubicacion' => ['string', 'min:10', 'max:280', 'required'],
            'latitud' => ['numeric', 'required'],
            'longitud' => ['numeric', 'required'],
            'terminos' => ['bool', 'required']
        ];
    }
}
