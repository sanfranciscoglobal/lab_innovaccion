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
            'web' => ['string', 'nullable', 'max:250'],
            'facebook' => ['string', 'nullable', 'max:250'],
            'instagram' => ['string', 'nullable', 'max:250'],
            'linkedin' => ['string', 'nullable', 'max:250'],
            'twitter' => ['string', 'nullable', 'max:250'],
            'youtube' => ['string', 'nullable', 'max:250'],
            'imagen' => ['image', 'max:2048', 'mimes:jpeg,png,gif,jpg', 'nullable'],
            // 'canton_id' => ['numeric', 'exists:canton,id', 'nullable'],
            'direccion' => ['string', 'min:10', 'max:280', 'required'],
            'latitud' => ['numeric', 'required'],
            'longitud' => ['numeric', 'required'],
            'terminos' => ['bool', 'required']
        ];
    }
}
