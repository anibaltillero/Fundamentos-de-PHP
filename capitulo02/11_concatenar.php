<?php
/**
 *          Descripcion :  Concatenar 
 *  
 *          Controlador : 11_concatenar.php     Encoding: UTF-8
 *       Fecha creacion : 23/07/2022 05:03:04 PM
 *  Fecha actualizacion : 23/07/2022 05:03:04 PM
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
define('TITULO', 'Capitulo 02: Concatenar');
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

                    
                   
                   <?php Tarjetas::Titulos('$C1 =  Nombre    ', ''); ?>
                   <?php Tarjetas::Titulos('$C2 =  Apellidos ', ''); ?>
                    
 
                    
                  <?php

                    $c1 = 'Nombres ';
                    $c2 = 'Apellidos ';
                    
                    Cadenas::setConcatenar_Nombres($c1, $c2);
                    
                    Bootstrap::setAlertas(Cadenas::getConcatenar_Nombres() );
               
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
