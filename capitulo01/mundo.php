<?php
/**
 *          Descripcion : mONTRANDO MI PRIMER PROGRAMA HOLA MUNDO
 *  
 *             Proyecto : FPHP5
 *          Controlador : phpinfo.php     Encoding: UTF-8
 *       Fecha creacion : 01/07/2022 11:51:46 AM
 *  Fecha actualizacion : 01/07/2022 11:51:46 AM
 *             @author  : Ing. Anibal Tillero
 *      Documentado por : Ing. Anibal Tillero
 *          @CopyLeft   : 2022 by 
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 
include '../clases/class.php';

//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define( 'TITULO', 'CAPITULO 1: Mi Primer Programa PHP + BOOTSTRAP 5');
?>
<?php Configuracion::getDocTypeHTML() ?>
<head>
    <?php Configuracion::getCabecera( TITULO ) ?>

</head>
<body>

   <!-- La barra nav del Pie de la pagina -->      
    <?php Bootstrap::NavBarFixedEncabezado( TITULO ); ?> 


    <!--  Begin page content -->
    

        <!-- contenedor -->         
        <div class="container">
            <div class="row justify-content-md-center">
                
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-10 table-responsive">
                    
                         
                    <?php
                     
                     Bootstrap::setAlertas('Este es mi primer programa en <strong>PHP</strong>');
               
                     Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                     Bootstrap::getAlertas(Bootstrap::ALERTA_INFO, TRUE );
                     Bootstrap::getAlertas(Bootstrap::ALERTA_WARNING, TRUE );
                     Bootstrap::getAlertas(Bootstrap::ALERTA_DANGER, TRUE );
      
                     ?>

                </div>
                
                <div class="col-md-1">&nbsp;</div>
            </div>
        </div>
        <!-- Fin contenedor -->  


        <!-- La barra nav del Pie de la pagina -->         
        <?php Bootstrap::NavBarPie(); ?>
        
        <!-- Lastest compiler an minifield Javascrip -->         
        <?php Configuracion::Js(); ?>
        
    </body>
</html>
