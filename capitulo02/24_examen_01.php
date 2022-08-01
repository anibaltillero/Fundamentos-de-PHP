<?php
/**
 *          Descripcion :  Listas
 *  
 *          Controlador : 23_listass.php     Encoding: UTF-8
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
define('TITULO', 'Capitulo 02: Examen 1');
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
                    $nombre = 'D A B C';

                    $arreglo = explode(' ', $nombre);

                    Arreglos::setAsignar($arreglo);
                    Arreglos::getMostrar();

                    
                    Tarjetas::Titulos('Ordenar las Letras segun su indice');
                     
                    echo $arreglo[1] . ' ' . $arreglo[2] . ' ' . $arreglo[3] . ' ' . $arreglo[0];
                    
                    
                    Tarjetas::Titulos('Ordenar las Letras con Sort');
                    
                    Arreglos::setOrdenar();
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
