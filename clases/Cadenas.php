<?php

/** ----------------------------------------------------------------------------
 *         Ayudante para: 
 *           Descripcion:
 * 
 *                 Clase: Candenas
 *       Fecha creacion : 23/07/2022 09:15:30 PM
 *  Fecha actualizacion : 23/07/2022 09:15:30 PM
 *             @author  : Ing. Anibal Tillero
 *      Documentado por : Ing. Anibal Tillero
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero
 * -----------------------------------------------------------------------------
 */
class Cadenas {

//put your code here
   
    private static $_resultado;
   
    
     /**
     * Arreglo con los Nombre de los Estados civiles
     * @var Array
     */
    public static $arrEstadoCivil = array('S'=>'SOLTERO','C'=>'CASADO','D'=>'DIVORCIADO','V'=>'VIUDO') ;

    /**
     * Arreglo con los rangos de precios 
     * @var Array
     */
    public static $arrPrecios = array( 'p1'=>'Menos a Bs. 5.000', 'p2'=>'5.000 - 10.000', 'p3'=>'Sobre - 10.000' );

    /**
     * Arreglo con las estaturas 
     * @var Array
     */
    public static  $arrEstatura= array( 'e1'=>'2.20 metros', 'e2'=>'1.90 metros', 'e3'=>'1.80 metros', 'e4'=>'1.70 metros', 'e5'=>'1.60 metros', 'e6'=>'1.50 metros' );

   
    
    
  /**
     *  Descripcion: Permite concatenar el nombe y el apellidos.
     * 
     *     Cadenas::setConcatenar_Nombres( $nombres, $apellidos ); 
     *
     * @param   string  $c1  Primera Cadena a Concatenar
     * @param   string  $c2  Segunda Cadena a Concatenar.
     * 
     * @example:  Candenas::setConcatenar_Nombres('Ana','Kin'); 
     */
    public static function setConcatenar_Nombres($c1 = '', $c2 = '') {

        self::$_resultado = $c1 .= ', ' . $c2;
    }

  /**
     *  Descripcion: Permite mostar la cadena concatenada
     * 
     *  @see setConcatenar
     * 
     *  @example Cadenas::getConcatenar_Nombres();  //Resultado: Ana, Kin
     * 
     *  @return string Cadena de nombre de la semana
     */
    public static function getConcatenar_Nombres() {

        return self::$_resultado;
    }

  /**
     *  Descripcion: Determina la longitud de la Cadena
     *
     *  @param Cadena $c1  La cadena a evaluar
     *
     *  @example:   Cadena::Longitud( $c1 );
     */
    public static function Longitud($c1) {

        return 'La Longitud de la Cadena es: ' . strlen($c1);
    }

  /**
     *  Descripcion: Determina la aparicion de un caracter o palabra dentro de una Cadena
     *
     *  @example:   Cadena::AparicionEnLaCadena( $c1, $caracteres, $logico );
     *  @param cadena $texto Cadena a ser evaluada
     *  @param cadena $caracter Caracater o cadena a buscar
     */
    public static function AparicionEnLaCadena($texto, $caracter, $logico = FALSE) {

        echo 'Aparicion de un caracter ' . $caracter . ' en una cadena: ' . strstr($texto, $caracter, $logico) . '<br>';
    }
    
    /**
     *  Descripcion: Determina la posicion de un caracter o palabra dentro de una Cadena
     *
     *  @example:   Cadena::PosicionEnLaCadena( $c1, $caracteres, $logico );
     *  @param cadena $c1 Cadena a ser evaluada
     *  @param cadena $caracter Caracater o cadena a posicion
     */

    public static function PosicionEnLaCadena($texto, $caracter) {

        return "La Ubicación del caracter $caracter en la cadena $texto : " . strpos($texto, $caracter) . '<br>';
    }

  /**
     *  Descripcion: Desplega el caracter del numero ASCII especificado
     *
     *  @example:   Cadena::ASC( $ascii );
     *  @param numero $ascii Numero ASCII
     */
    public static function ASC($ascii) {

        echo 'El Asc es ' . chr($ascii);
    }
    
    public static function getTablaASC() {
        for ($i = 32; $i <= 126; $i++) 
        {
            $letra = chr($i);
            print "Ascii nro: $i  su caracter es = $letra <br />";
        }

    }

}
