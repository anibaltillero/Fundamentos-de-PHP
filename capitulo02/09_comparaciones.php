<?php
/**
 *          Descripcion : Operadores Aritmetivos. 
 *  
 *          Controlador : 08_asignacion.php     Encoding: UTF-8
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


//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Comparaciones');
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
                    <?php Tarjetas::Titulos('COMPARACIONES', ''); ?>       
                  
                    <?php
                    
                    
                        $n1 = (int) 8;
                        $n2 = (int) 3;
                        $n3 = (double) 3 ;

                    ?>
                        
                    
                    
                    <div class="row">   
                        <?php 
                        Tarjetas::Tablero('$N1 = (int) 8:', $n1, Tarjetas::FA_TARJETA_USUARIOS, 'bg-primary');    
                        Tarjetas::Tablero('$N2 = (int) 3:', $n2 , Tarjetas::FA_TARJETA_USUARIOS,  'bg-secondary');   
                        Bootstrap::setAlertas( Operadores::setComparacion($n1, $n2)  );
                        Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                        ?>       
                    </div>          
                            
                    <div class="row">   
                        <?php 
                        Tarjetas::Tablero('$N2 = (int) 3:', $n2 , Tarjetas::FA_TARJETA_USUARIOS,  'bg-secondary');    
                        Tarjetas::Tablero('N3 = (double) 3 :', $n3 , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-dark');    
                        Bootstrap::setAlertas( Operadores::setComparacion($n2, $n3)  );
                        Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                        ?>
                    </div>          
                            
                            
                            
                            
                    
                  
                    
                    <?php
                             
    
                    
                    
                    
                    
                    
                    
                        // ------------------------------------------------------------------------
                        // Comparación de tipo Ternaria  
                        // ------------------------------------------------------------------------
                        echo '<br><br>';
                        echo '<br><br>';
                        echo 'Comparación de tipo Ternaria';


                       echo  ( $n2 == $n3 ) ? "SI" : "NO" ;
             
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
