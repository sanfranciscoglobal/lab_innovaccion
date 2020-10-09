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
            'proposito' => 'numeric|required',
            'tipo_reg' => 'boolean|required',
            'organizacion' => 'string|nullable|required_if:tipo_reg,false',
            'tipo_org' => 'numeric|nullable|required_if:tipo_reg,false',
            'direccion' => 'string|nullable|required_if:tipo_reg,false',
            'canton_id' => 'numeric|nullable|required_if:tipo_reg,false',
            'latitud' => 'numeric|nullable|required_if:tipo_reg,false',
            'longitud' => 'numeric|nullable|required_if:tipo_reg,false',
            'web' => 'url|nullable|required_if:tipo_reg,false',
            'facebook' => 'url|nullable|required_if:tipo_reg,false',
            'instagram' => 'url|nullable|required_if:tipo_reg,false',
            'linkedin' => 'url|nullable|required_if:tipo_reg,false',
            'twitter' => 'url|nullable|required_if:tipo_reg,false',
            'terminos' => 'boolean|required',
        ];
    }
}
