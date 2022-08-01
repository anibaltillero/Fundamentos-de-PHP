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
define('TITULO', 'Capitulo 02: Eliminar ESpaios entre letrass');
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
                    Tarjetas::Titulos(TITULO);

                    // funcion que elimina los doble espacios (o mas) dentro de una
// cadena, no unicamente en los extremos



                    function fun_eliminarDobleEspacios($cadena) {

                        $limpia = "";
                        $parts = array();

                        // divido la cadena con todos los espacios q haya
                        $parts = explode(" ", $cadena);

                        foreach ($parts as $subcadena) {
                            // de cada subcadena elimino sus espacios a los lados
                            $subcadena = trim($subcadena);

                            // luego lo vuelvo a unir con un espacio para formar la nueva cadena limpia
                            // omitir los que sean unicamente espacios en blanco
                            if ($subcadena != "") {
                                $limpia .= $subcadena . " ";
                            }
                        }
                        $limpia = trim($limpia);

                        return $limpia;
                    }

                    echo fun_eliminarDobleEspacios('espacios      entre      letas');
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
