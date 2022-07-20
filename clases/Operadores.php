<?php

/** ----------------------------------------------------------------------------
 *         Ayudante para: Operadores Aritmeticos
 *           Descripcion: 
 * 
 *                 Clase: numeros
 *       Fecha creacion : 19/07/2015 08:19:38 PM
 *  Fecha actualizacion : 19/07/2015 08:19:38 PM
 *             @author  : Ing. Anibal Tillero
 *      Documentado por : Ing. Anibal Tillero
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero
 * -----------------------------------------------------------------------------
 */
class Operadores {

//put your code here

    private static $_resultado;
    private static $_rsAsignacion;

    /**
     *  Descripcion: 
     * 
     *  @param numerico $n1 Valor 1
     *  @param numerico $n2 valor 2
     * 
     * @example:   Operadores::setOperadores_Aritmeticos( 1 , 2 , '+');
     *             Operadores::getOperadores_Aritmeticos();
     */
    public static function setAritmeticos(int $n1 = 0, int $n2 = 0, string $operador = '+') {
            
        switch ($operador) {
            case '+': self::$_resultado = "La suma  de $n1 + $n2 = " . ($n1 + $n2);
                break;
            case '-': self::$_resultado = "La resta de $n1 - $n2 = " . ($n1 - $n2);
                break;
            case '*': self::$_resultado = "La Multiplicación de $n1 * $n2 = " . ($n1 * $n2);
                break;
            case '/': self::$_resultado = "La división de $n1 / $n2 = " . ($n1 / $n2);
                break;

            default:
                break;
        }
    }

    /**
     *  Descripcion: Retorna el resultado de la Operacion aritmertica 
     * 
     *  @example:   Numeros::getOperadores_Aritmeticos()          
     *
     *  @return numerico Retorna el resultado de la operacion
     */
    public static function getAritmeticos()  {

        return self::$_resultado;
    }

    /**
     *  Descripcion: Permite asignar un valor 
     * 
     * @param numrico $valor Monto a ser asignado
     *
     * @example:   Operadores::setOperadores_Asignacion( 1 );
     *             Operadores::getOperadores_Asignacion();
     */
    public static function setAsignacion($valor) {
        self::$_rsAsignacion = 0;
        self::$_rsAsignacion += $valor;
        
        
    }

    /**
     *  Descripcion: 
     * 
     * @param type $name Description
     *
     * @example: Operadores::getOperadores_Aritmeticos();
     * 
     * @return Integer Valor asignado a la variables (acumulado) 
     */
    public static function getAsignacion() {

        return "El Resultado de Asignar " . self::$_rsAsignacion . " es: ".  self::$_rsAsignacion .'<br>';

    
    }

    /**
     *  Descripcion: comparar valores
     * 
     *  @param numerico $n1 Valor 1
     *  @param numerico $n2 valor 2
     *
     * @example:   Operadores::setOperadores_Asignacion( 1 );
     *                   Operadores::getOperadores_Asignacion();
     */
    public static function setComparacion($n1, $n2) {

        if ($n1 == $n2) {
            echo "$n1 y $n2 son iguales <br/>";
        }

        if ($n1 === $n2) {
            echo "$n1 y $n2 son IDENTICAS y del Mismo tipo <br/>";
        }

        if ($n1 !== $n2) {
            echo "$n1 y $n2 No son IDENTICAS, O Ni del Mismo tipo <br/>";
        }

        if ($n1 != $n2) {
            echo "$n1 y $n2 no son iguales <br/>";
        }

        if ($n1 > $n2) {
            echo "El Numero $n1 es mayor que $n2 <br/>";
        }

        if ($n1 < $n2) {
            echo "El numero $n1 es Menor que $n2 <br />";
        }
    }

}
