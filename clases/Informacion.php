<?php

/* * -----------------------------------------------------------------------------
 *         Ayudante para: Informacion
 *           Descripcion: Muestra los mensajes de la Informacion y textos.
 *                        utilizando Operador de Resolución de Ámbito (::)
 * 
 *                 Clase: Informacion
 *       Fecha creacion : 31/12/2017 05:28:31 PM
 *  Fecha actualizacion : 31/12/2017 05:28:31 PM
 *             @author  : Ing. Anibal Tillero
 * 
 *      Documentado por : Ing. Anibal Tillero
 *          @CopyLeft   : 2017 by M.P.P. PARA RELACIONES EXTERIORES   
 * ----------------------------------------------------------------------------- 
 */

class Informacion {

    /**
     * Arreglo con los Nombre de los meses del año en Español
     * @var Array
     */
    private static $_valor;
    private static $_tipo;

    /**
     *  Descripcion: Muestra gran cantidad de información sobre el estado actual
     *               de PHP. Incluye información sobre las opciones de compilación
     *               y extensiones de PHP, versión de PHP, información del servidor
     *               y entorno (si se compiló como módulo), entorno PHP, versión
     *                 del OS, rutas, valor de las opciones de configuración locales
     *               y generales, cabeceras HTTP y licencia de PHP.
     *
     * @param $ver INFO_GENERAL         (1)  La línea de configuración, ubicación de php.ini, fecha de compilación, servidor Web, sistema y más.
     * @param $ver INFO_CREDITS         (2)  Créditos de PHP.
     * @param $ver INFO_CONFIGURATION   (4)  Valores Locales y Maestros actuales de las directivas PHP.
     * @param $ver INFO_MODULES         (8)  Módulos cargados y sus respectivos parámetros Ver también get_loaded_extensions().
     * @param $ver INFO_ENVIRONMENT     (16) Información de las variables de entorno. Tambien disponibles en $_ENV.
     * @param $ver INFO_VARIABLES 	(32) Muestra todas las variables predefinidas de EGPCS (Environment, GET, POST, Cookie, Server).
     * @param $ver INFO_LICENSE         (64) Información de Licencia de PHP. Ver también el » FAQ de licencia.
     * @param $ver INFO_ALL 	        (-1) Muestra toda la información anterior
     *
     *  @example:   Informacion::phpinfo();
     */
    public static function info($ver = INFO_ALL) {

          echo phpinfo($ver);
        
    }

  /**
     *  Descipcion: Ver el tipo de datos que contiene la variable.
     *
     *  @param  valor $valor Conteniddo de la variable
     *
     *  @example:   Informacion::setTipo_de_Datos_ver($valor) ;
     *                    Informacion::getTipo_de_Datos_ver();  
     */
    public static function setTipo_de_Datos_ver($valor) {
        self::$_valor = $valor;
    }

    /**
        *  Descipcion: Mostrar el tipo de datos que contiene la variable.
        *              
        */
    public static function getTipo_de_Datos_ver() {
        echo 'El Tipo de datos es:' . gettype(self::$_valor) . '<br>';
    }

    public static function setTipo_de_Datos_cambiar($valor, $tipo = 'string') {
        if (settype($valor, $tipo)) {
            self::$_valor = $valor;
        }
    }

    public static function getTipo_de_Datos_cambiar() {
        echo 'La convertimos a: ' . gettype(self::$_valor) . '<br>';
    }

}
