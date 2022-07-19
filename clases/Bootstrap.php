<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bootstrap5
 *
 * @author ServiOficina
 */
class Bootstrap {

    //put your code here

    private static $_sms;

    CONST ALERTA_SUCCESS = 'alert-success';
    CONST ALERTA_INFO = 'alert-info';
    CONST ALERTA_WARNING = 'alert-warning';
    CONST ALERTA_DANGER = 'alert-danger';

    /**
     * Descripcion: Encabezado de pegamina en el top de la pagina
     * 
     * @param type $titulo
     */
    public static function NavBarFixedEncabezado($titulo) {
        ?>  
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <span class="navbar-brand "><strong><?= $titulo ?></strong></span>
                </div>
            </nav>
            <div class="b-example-divider"></div>
        </header>
        <?php
    }

    /**
     * Descripcion: Especidica la barra NAV en la parte inferior de la pantalla.
     */
    public static function NavBarPie() {
        ?>
        <nav class="navbar fixed-bottom navbar-dark bg-dark">
            <span class="navbar-brand">Fundamentos de Programacion PHP </span>
            <span class="navbar-text">© 2022 Ing. Anibal Tillero</span>
        </nav>
        <?php
    }

    /**
     *  Descripcion: Asignar Desplega un mensaje
     * 
     *  @example:   Informacion::setMensaje( 'Mensaje' );
     *  @param cadena $sms Contenido del Mensaje
     */
    public static function setAlertas($sms) {
        self::$_sms = $sms;
    }

    /*
     *  Descripcion: Desplega un mensaje de Alert Successe
     */

    public static function getAlertas($alert_tipo, $bDescartable = false) {

        switch ($alert_tipo) {
            case self::ALERTA_SUCCESS: $cadena = self::ALERTA_SUCCESS;
                break;

            case self::ALERTA_INFO: $cadena = self::ALERTA_INFO;
                break;

            case self::ALERTA_WARNING: $cadena = self::ALERTA_WARNING;
                break;

            case self::ALERTA_DANGER: $cadena = self::ALERTA_DANGER;
                break;
            default:
                $cadena = self::ALERTA_SUCCESS;
                break;
        }
        ?>
        <div class="alert <?= $cadena ?> <?= ( $bDescartable == true ) ? "fade show" : "" ?>" role="alert">
        <?= self::$_sms ?>
        <?php if ($bDescartable == true) { ?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        <?php } ?>
        </div>
            <?php
        }

    }
    