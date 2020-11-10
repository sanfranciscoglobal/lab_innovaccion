<?php

namespace App\Http\Requests\Perfil;

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
            'celular' => 'string|required',
            'avatar' => 'image|nullable|max:1024',
            'proposito' => 'numeric|required',
            'tipo_reg' => 'boolean|required',
            'organizacion' => 'string|nullable|required_if:tipo_reg,0',
            'tipo_org' => 'numeric|nullable|required_if:tipo_reg,0',
            'direccion' => 'string|nullable|required_if:tipo_reg,0',
            'canton_id' => 'numeric|nullable',
            'latitud' => 'numeric|nullable|required_if:tipo_reg,0',
            'longitud' => 'numeric|nullable|required_if:tipo_reg,0',
            'web' => 'string|nullable|required_if:tipo_reg,0',
            'facebook' => 'string|nullable',
            'instagram' => 'string|nullable',
            'linkedin' => 'string|nullable',
            'twitter' => 'string|nullable',
            'terminos' => 'boolean|required',
        ];
    }
}
