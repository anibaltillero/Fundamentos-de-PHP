<?php
/**
 *          Descripcion :  Logicos
 *  
 *          Controlador : 10_logicos.php     Encoding: UTF-8
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
define('TITULO', 'Capitulo 02: Logicos ');
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

                <?php

                   $a = 8;
                   $b = 3;
                   $c = 3;
                ?>      
                   
                   <div class="row">   
                        <?php 
                        Tarjetas::Tablero('$a = (int) 8:', $a, Tarjetas::FA_TARJETA_USUARIOS, 'bg-primary');    
                        Tarjetas::Tablero('$b = (int) 3:', $b , Tarjetas::FA_TARJETA_USUARIOS,  'bg-secondary');   
                        Bootstrap::setAlertas( Operadores::setComparacion($a, $b)  );
                        Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                        ?>       
                    </div>          
                            
                    <div class="row">   
                        <?php 
                        Tarjetas::Tablero('$N2 = (int) 3:', $b , Tarjetas::FA_TARJETA_USUARIOS,  'bg-secondary');    
                        Tarjetas::Tablero('N3 = (double) 3 :', $c , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-dark');    
                        Bootstrap::setAlertas( Operadores::setComparacion($b, $c)  );
                        Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                        ?>
                    </div>          
                            



                  
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
