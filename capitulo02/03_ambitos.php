<?php
/**
 *          Descripcion : AMBITO DE LAS VARIABLES. 
 *  
 *          Controlador : 03_.php     Encoding: UTF-8
 *       Fecha creacion : 01/07/2022 05:03:04 PM
 *  Fecha actualizacion : 01/07/2022 05:03:04 PM
 *             @author  : Ing. Anibal Tillero 
 *      Documentado por : Ing. Anibal Tillero 
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero     
 *  
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 

include '../clases/class.php';



 function uf_enviar_datos() {
    $texto = "Estamos <strong>dentro</strong> de la funcion";
    
     Bootstrap::setAlertas(  $texto );
               
     Bootstrap::getAlertas(Bootstrap::ALERTA_INFO, TRUE );
                     
                     
    
}




//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Ambito de las variables');
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

                    
                    <?php Tarjetas::Titulos('CAPITULO 2: AMBITO DE LAS VARIABLES ', '<I>DENTRO Y FUERAS DE LAS FUNCIONES</I>'); ?>       
                  
                    
                    <?php
            
                    
                    
                    $texto = "Estamos <strong>fuera</strong> de la funcion";
                    
                    echo '1.- Valor inicial del contenido de la variable $texto <br />';
                   
                    
                     Bootstrap::setAlertas(  $texto );
               
                     Bootstrap::getAlertas(Bootstrap::ALERTA_SUCCESS, TRUE );
                     
                    
                    echo '2.- Valor de la variable $texto dentro de la funcion <br />';
                    
                    uf_enviar_datos();

                    
                    echo '3.- Valor de la variable $texto despues de salir de la funcion <br />';
                    
                      Bootstrap::setAlertas(  $texto );
               
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
