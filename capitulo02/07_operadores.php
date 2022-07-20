<?php
/**
 *          Descripcion : Operadores Aritmetivos. 
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


//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Operadores Aritmeticos');
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
                    <?php Tarjetas::Titulos('OPERADORES ARITMETICOS', 'Valor $n1 = 10 y $n2 = 5'); ?>       
                  
                    
                    <?php
            
                    $n1 = 10;
                    
                    $n2 = 5;
                    
                    
                    Operadores::setAritmeticos($n1, $n2, '+');
                    
                    Bootstrap::setAlertas( Operadores::getAritmeticos()  );
               
                    Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                      
                    
                    
                    
                    
                    Operadores::setAritmeticos($n1, $n2, '-');
                    
                    Bootstrap::setAlertas( Operadores::getAritmeticos()  );
               
                    Bootstrap::getAlertas(Bootstrap::ALERTA_INFO, TRUE );
                    
                    
                    
                    Operadores::setAritmeticos($n1, $n2, '*');
                    
                    Bootstrap::setAlertas( Operadores::getAritmeticos()  );
               
                    Bootstrap::getAlertas(Bootstrap::ALERTA_WARNING, TRUE );
                    
                    
                    Operadores::setAritmeticos($n1, $n2, '/');
                    
                    Bootstrap::setAlertas( Operadores::getAritmeticos()  );
               
                    Bootstrap::getAlertas(Bootstrap::ALERTA_WARNING, TRUE );
                    
                    
                    
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
