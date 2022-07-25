<?php
/**
 *          Descripcion :  Encuentra l aprimera aparacion en un string
 *  
 *          Controlador : 08_asignacion.php     Encoding: UTF-8
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
define('TITULO', 'Capitulo 02: Encuentra la primera aparación en una cadena');
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

                    
                 <?php  $c1 = 'dominio@gmail.com'; ?>
                       
                  <?php Tarjetas::Titulos("La Cadena es: <b>$c1</b> y se necesita encontrar la posicion del @" ) ?>       
                    
                  <?php
                    
                   Bootstrap::setAlertas(Cadenas::PosicionEnLaCadena($c1, '@') );
               
                    Bootstrap::getAlertas(Bootstrap::ALERTA_INFO, TRUE );
                    

                   Bootstrap::setAlertas('Recuenda que las <b>cadenas</b> son arreglos, se cuentan los espacios desde la posicion <strong>0</strong>');
               
                   Bootstrap::getAlertas(Bootstrap::ALERTA_DANGER, TRUE );
                    

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
