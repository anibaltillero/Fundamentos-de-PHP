<?php
/**
 *          Descripcion : constate. 
 *  
 *          Controlador : 06_constantes.php     Encoding: UTF-8
 *       Fecha creacion : 19/07/2022 05:03:04 PM
 *  Fecha actualizacion : 19/07/2022 05:03:04 PM
 *             @author  : Ing. Anibal Tillero 
 *      Documentado por : Ing. Anibal Tillero 
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero     
 *  
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 

include '../clases/class.php';


CONST CONSTANTE_VALOR  = '<small><strong>ESTE EL EL CONTENIDO DEL LA CONSTANTE</strong></small>';



//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Variables Estatiscas');
?>
<?php Configuracion::getDocTypeHTML() ?>
<head>
    <?php Configuracion::getCabecera(TITULO) ?>

</head>
<body>

    <!-- La barra nav del Pie de la pagina -->      
    <?php Bootstrap::NavBarFixedEncabezado(TITULO); ?> 


    <!--  Begin page content -->


    <!-- contenedor -->         
    <div class="container"> 

        <!-- ================================ -->
        <!-- INICIO: columna del LAS Tarjetas -->
        <!-- ================================ -->
        <div class="col col-md-12" >

            <div class="container">           
                <section id="minimal-statistics">

                    <strong>
                    <?php Tarjetas::Titulos('DECLARACION DE CONSTANTES', ''); ?>       
                  
                    
                    <?php
            
                      Bootstrap::setAlertas(  CONSTANTE_VALOR );
               
                     Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                      
                    
                    ?>
                
                    
                    
                    
                </section>
            </div>
        </div>    

    </div> 
    <!-- Fin contenedor -->  


    <!-- La barra nav del Pie de la pagina -->         
    <?php Bootstrap::NavBarPie(); ?>

    <!-- Lastest compiler an minifield Javascrip -->         
    <?php Configuracion::Js(); ?>

</body>
</html>
