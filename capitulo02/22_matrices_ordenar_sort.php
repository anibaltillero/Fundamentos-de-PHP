<?php
/**
 *          Descripcion :  Matrices funciones
 *  
 *          Controlador : 21_matrices_funciones.php     Encoding: UTF-8
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
define('TITULO', 'Capitulo 02: Matrices ordenar con sort');
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
                    $arreglo = Cadenas::$arrEstadoCivil;


                    Tarjetas::Titulos('ARREGLO NORMAL');
                    
                    Arreglos::setAsignar($arreglo);
                    Arreglos::getMostrar();

                    Tarjetas::Titulos('ARREGLO ORDENADO USANDO SORT');
                    

                    Arreglos::setAsignar($arreglo);
                    Arreglos::setOrdenar();
                    Arreglos::getMostrar();
                    Arreglos::setLimpiar($arreglo);
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
