<?php
/**
 *          Descripcion :  Matrices
 *  
 *          Controlador : 08_asignacion.php     Encoding: UTF-8
 *       Fecha creacion : 28/07/2022 05:03:04 PM
 *  Fecha actualizacion : 28/07/2022 05:03:04 PM
 *             @author  : Ing. Anibal Tillero 
 *      Documentado por : Ing. Anibal Tillero 
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero     
 *    https://code.tutsplus.com/es/tutorials/working-with-php-arrays-in-the-right-way--cms-28606
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 

include '../clases/class.php';

//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Arreglos ');
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
                    Tarjetas::Titulos("T1.- MOSTRAR ARREGLOS NORMALES", "", array("class" => "text-success"));

                    $arreglo = array();
                    $arreglo = array('gato', 'perro', 'caballo', 'pez');

                    Arreglos::setAsignar($arreglo);
                    Arreglos::getEstructura();
                    Arreglos::getElementos();
                    Arreglos::getMostrar();



                    Tarjetas::Titulos("T2.- Arreglos indexados", "", array("class" => "text-success"));

                    $arreglo = array();
                    $arreglo = array(0 => 'MASCULINO', 1 => 'FEMENINO');

                    Arreglos::setAsignar($arreglo);
                    Arreglos::getElementos();
                    Arreglos::getEstructura();
                    Arreglos::getMostar_indice();
                    Arreglos::getMostrar();



                    Tarjetas::Titulos("T3.- La función list(), que no es realmente una función, sino una construcción de lenguaje, está diseñada para asignar variables de una manera corta", "", array("class" => "text-success"));

                    $arreglo = array();
                    $arreglo = array(0 => 'MASCULINO', 1 => 'FEMENINO');

                    list( $M, $F ) = $arreglo;

                    echo $M . '<br>';
                    echo $F;

                    Tarjetas::Titulos("T4.- ARREGLOS TIPO CODEIGNITER", "", array("class" => "text-success"));

                    $arreglo = array();

                    $arreglo['nombre'] = "Jason";
                    $arreglo['correo'] = "jason@example.com";
                    $arreglo['idioma'] = "English";

                    Arreglos::setAsignar($arreglo);
                    Arreglos::getElementos();
                    Arreglos::getEstructura();
                    Arreglos::getMostrar();

                    Tarjetas::Titulos("T5.- ARREGLOS ASOCIATIVOS", "", array("class" => "text-success"));

                    $arreglo = array();
                    $arreglo = array('M' => 'MASCULINO', 'F' => 'FEMENINO');

                    Arreglos::setAsignar($arreglo);
                    Arreglos::getElementos();
                    Arreglos::getEstructura();
                    Arreglos::getMostrar();


                    Tarjetas::Titulos('6.-Extrar de un arreglo asociativo', "", array("class" => "text-success"));

                    $arreglo = array();
                    $arreglo = array('M' => 'MASCULINO', 'F' => 'FEMENINO');
                    Arreglos::setAsignar($arreglo);
                    Arreglos::getElementos();
                    Arreglos::getEstructura();
                    Arreglos::getMostrar();

                    Arreglos::getExtraer_asociativo();


                    echo $M;
                    echo $F;



//                    $clothes = 't-shirt';
//                    $size = 'medium';
//                    $color = 'blue';
//                    $arreglo = array();
//                    $arreglo = compact('clothes', 'size', 'color');
//
//                    print_r($arreglo);


                    Tarjetas::Titulos('7- ARREGLOS: COMBINANDO UN ARREGLO DE KEY Y OTRO DE VALORES', "", array("class" => "text-success"));


                    $key = array('sky', 'grass', 'orange');

                    $valor = array(' blue', 'green', 'orange');
                    
                    $arreglo = array();
                    $arreglo = Arreglos::setArreglo_combinar($key, $valor);

                    Arreglos::setAsignar($arreglo);
                    Arreglos::getMostrar_key();
                    Arreglos::getMostrar_valor();
                    Arreglos::getElementos();
                    Arreglos::getEstructura();
                    Arreglos::getMostrar();


                    Tarjetas::Titulos(' 8.- Desplegar Arreglo Multiple', "", array("class" => "text-success"));

                    $cars = array();
                    $cars = array(
                        0 => array("Anibal", "M"),
                        1 => array("Pepe", "M"),
                        2 => array("Lea", "F"),
                        3 => array("Lu", "F")
                    );

                    Arreglos::setAsignar($cars);
                    Arreglos::getEstructura();
                    Arreglos::getElementos();
                    Arreglos::getMultidimensional();
                    
                    
                    
                    
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
