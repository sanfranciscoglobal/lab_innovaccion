<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Letras implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $permitidos = "áéíóúabcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOP QRSTUVWXYZ ";
        //$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";

        for ($i = 0; $i < strlen($value); $i++) {
            if (strpos($permitidos, substr($value, $i, 1)) === false) {
                //no es válido;
                return false;
            }
        }

        //si estoy aqui es que todos los caracteres son validos
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute permite solo letras';
    }
}
