<?php
/**
 *          Descripcion : matrices indice asociativos 
 *  
 *          Controlador : 20_matrices_indice_asociativos     Encoding: UTF-8
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
define('TITULO', 'Capitulo 02:Arreglos asociativos ');
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
                    Tarjetas::Titulos('ARREGLOS ASOCIATIVOS');

                    $arreglo = array();

                    // Arreglo Asociativo

                    $arreglo = Cadenas::$arrEstadoCivil;

                    echo "Desplegar los valor Normalmente : " . $arreglo['S'] . "<br>";


                    Arreglos::setAsignar($arreglo);
                    Arreglos::getElementos();
                    Arreglos::getEstructura();
                    Arreglos::getMostrar();

                    Arreglos::setAgregar_asociativo('A', 'ARRECHO');
                    Arreglos::getEstructura();
                    Arreglos::getMostrar();
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
