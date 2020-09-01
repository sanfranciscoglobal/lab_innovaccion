<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CedulaIdentidad implements Rule
{
    public static $mensaje = null;

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
        $cedula = self::validarCI($value);
        return $cedula ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return self::$mensaje;
    }

    public static function validarCI($strCedula)
    {
        //aqui explico la logica de la validacion de una cedula de ecuador
        //El decimo Digito es un resultante de un calculo
        //Se trabaja con los 9 digitos de la cedula
        //Cada digito de posicion impar se lo duplica, si este es mayor que 9 se resta 9
        //Se suman todos los resultados de posicion impar
        //Ahora se suman todos los digitos de posicion par
        //se suman los dos resultados
        //se resta de la decena inmediata superior
        //este es el decimo digito
        //si la suma nos resulta 10, el decimo digito es cero

        if (is_null($strCedula) || empty($strCedula)) {
            //compruebo si que el numero enviado es vacio o null
            self::$mensaje = "Por Favor Ingrese la Cedula";
        } else {//caso contrario sigo el proceso
            if (is_numeric($strCedula)) {
                $total_caracteres = strlen($strCedula);// se suma el total de caracteres
                if ($total_caracteres == 10) {//compruebo que tenga 10 digitos la cedula
                    $nro_region = substr($strCedula, 0, 2);//extraigo los dos primeros caracteres de izq a der
                    if ($nro_region >= 1 && $nro_region <= 24) {// compruebo a que region pertenece esta cedula//
                        $ult_digito = substr($strCedula, -1, 1);//extraigo el ultimo digito de la cedula

                        //extraigo los valores pares//
                        $valor2 = substr($strCedula, 1, 1);
                        $valor4 = substr($strCedula, 3, 1);
                        $valor6 = substr($strCedula, 5, 1);
                        $valor8 = substr($strCedula, 7, 1);
                        $suma_pares = ($valor2 + $valor4 + $valor6 + $valor8);

                        //extraigo los valores impares//
                        $valor1 = substr($strCedula, 0, 1);
                        $valor1 = ($valor1 * 2);
                        if ($valor1 > 9) {
                            $valor1 = ($valor1 - 9);
                        }

                        $valor3 = substr($strCedula, 2, 1);
                        $valor3 = ($valor3 * 2);
                        if ($valor3 > 9) {
                            $valor3 = ($valor3 - 9);
                        }

                        $valor5 = substr($strCedula, 4, 1);
                        $valor5 = ($valor5 * 2);
                        if ($valor5 > 9) {
                            $valor5 = ($valor5 - 9);
                        }

                        $valor7 = substr($strCedula, 6, 1);
                        $valor7 = ($valor7 * 2);
                        if ($valor7 > 9) {
                            $valor7 = ($valor7 - 9);
                        }

                        $valor9 = substr($strCedula, 8, 1);
                        $valor9 = ($valor9 * 2);
                        if ($valor9 > 9) {
                            $valor9 = ($valor9 - 9);
                        }

                        $suma_impares = ($valor1 + $valor3 + $valor5 + $valor7 + $valor9);
                        $suma = ($suma_pares + $suma_impares);
                        $dis = substr($suma, 0, 1);//extraigo el primer numero de la suma
                        $dis = (($dis + 1) * 10);//luego ese numero lo multiplico x 10, consiguiendo asi la decena inmediata superior
                        $digito = ($dis - $suma);
                        if ($digito == 10) {
                            $digito = '0';
                        }

                        //si la suma nos resulta 10, el decimo digito es cero
                        if ($digito == $ult_digito) {//comparo los digitos final y ultimo
                            return $strCedula;
                        } else {
                            self::$mensaje = "Cedula Incorrecta";
                        }
                    } else {
                        self::$mensaje = "Este Nro de Cedula no corresponde a ninguna provincia del ecuador";
                    }
                } else {
                    self::$mensaje = "Es un Numero y tiene solo" . $total_caracteres;
                }
            } else {
                self::$mensaje = "Esta Cedula no corresponde a un Nro de Cedula de Ecuador";
            }
        }

        return null;
    }
}
