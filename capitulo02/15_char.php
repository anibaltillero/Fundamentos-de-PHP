<?php
/**
 *          Descripcion :  Indicar la Posicion del Caracter en la cadena
 *  
 *          Controlador : 14_strpos.php     Encoding: UTF-8
 *       Fecha creacion : 27/07/2022 05:03:04 PM
 *  Fecha actualizacion : 27/07/2022 05:03:04 PM
 *             @author  : Ing. Anibal Tillero 
 *      Documentado por : Ing. Anibal Tillero 
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero     
 *  
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 

include '../clases/class.php';


//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Indicar la posición del Caracater en la cadena');
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
                <section id="minimal-statistics" class="primary">
                    <span>
                  
                 <?php  
                
                   Tarjetas::Titulos("Los caracteres ASCII" );        
                
                   Cadenas::ASC(180);
    
                    
                   
                   Bootstrap::setAlertas(Cadenas::getTablaASC() );
               
                   Bootstrap::getAlertas(Bootstrap::ALERTA_INFO, TRUE );

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
