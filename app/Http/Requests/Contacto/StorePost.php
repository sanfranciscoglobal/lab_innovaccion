<?php

namespace App\Http\Requests\Contacto;

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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public static function myRules()
    {
        return [
            'name' => 'required|max:250',
            'email' => 'required|email|max:250',
            'subject' => 'required|max:250',
            'message' => 'required|max:250'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->myRules();
    }
}
