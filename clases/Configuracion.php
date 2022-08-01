<?php
/** ----------------------------------------------------------------------------
 *         Ayudante para: La configuracion del Proyecto
 *           Descripcion: configuracion
 * 
 *                 Clase: configuracion
 *       Fecha creacion : 01/01/2020 08:19:38 PM
 *  Fecha actualizacion : 01/01/2020 08:19:38 PM
 *             @author  : Ing. Anibal Tillero
 *      Documentado por : Ing. Anibal Tillero
 *          @CopyLeft   : 2020 by Ing. Anibal Tillero
 * -----------------------------------------------------------------------------
 */

/**
 * Description basica del sistema
 *
 * @author ing: anibal Tillero
 * @Version 1.0
 * 
 */
class Configuracion {

    /**
     *  @todo  Especifica el charSet de la página
     * 
     *  @var string  character set of input and output
     *  
     */
    public static $charset = 'UTF-8';

    /**
     *
     *  @vav integer 
     *  @access public
     */
    const IMAGENES_RUTA = '../imagenes/';

    /**
     * Descripcion: Inicio del HTML
     */
    public static function getDocTypeHTML() {
        ?> 
        <!doctype html>
        <html lang="es" class="h-100">
        <?php
    }

    public static function getDocTypeHTML_Negro() {
        ?> 
            <!doctype html>
            <html lang="es" class="h-100 bg-success" style="background-color: #000">
            <?php
        }

        /**
         * 
         *  Se Especifica el contenido del HEAD del HTML para los siguinetes:
         *   
         *   1.- Especifica la configuracion de charset de la pagina,
         * 
         *   2.- Especifica el favicon del sistema,
         * 
         *   3.- Con esto garantizamos que se vea bien en dispositivos móviles,
         * 
         *   4.- Latest compiled and minifield CSS de Bootstrap,
         * 
         *   5.- include the script para los alertify.
         * 
         * 
         *   @author Ing. Anibal Tillero
         *   @category Maquetacion
         *               
         */
        public static function getCabecera($titulo) {
            ?>   

                <title><?= strtoupper($titulo) ?></title>


                <meta name="description" content="Ing. Anibal Tillero Desarrolador de Software en PHP, para Servioficina.">	

                <!-- Especifica la configuracion de charset de la pagina -->
                <meta http-equiv="Content-Type" content="text/html; charset=<?= self::$charset ?>" />


                <!-- Especifica el favicon del sistema -->
                <link href="../imagenes/favicon/php.ico" type="image/x-icon" rel="icon"  sizes="32x32" />


                <!-- Con esto garantizamos que se vea bien en dispositivos móviles -->
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">



                <!-- include the script para los que funcione datepicker-->

                <script src='../clases/jquery/js/jquery-3.5.1.min.js'></script>


                <!-- Latest compiled and minifield CSS -->

                <!-- <link href="../clases/bootstrap-4.5.2/css/bootstrap.min.css" rel="stylesheet">  -->

                <link href="../clases/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">  



                <!-- include the script para los alert-->
                <script src="../clases/alertifyjs/alertify.min.js"></script>
                <!-- include the style -->
                <link rel="stylesheet" href="../clases/alertifyjs/css/alertify.min.css" />
                <!-- include a theme -->
                <link rel="stylesheet" href="../clases/alertifyjs/css/themes/default.css" />






                <link href="../clases/fontawesome/css/all.css" rel="stylesheet" media="screen"> 
                <link href="../clases/css/estilos.css" rel="stylesheet" type="text/css">






        <?php
    }

    /**
     * Descripcion: Especifica las libreias de javascript de Jquery y Bootrap
     *              estas van antes del final del body.
     */
    public static function Js() {
        ?>
                <!-- Lastest compiler an minifield Javascrip -->         

                <script src='../clases/bootstrap-5.1.3/js/bootstrap.min.js'></script>
                <script src='../clases/bootstrap-5.1.3/js/bootstrap.bundle.min.js'></script>

                <?php
            }

        }
        