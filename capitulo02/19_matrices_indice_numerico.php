<?php
/**
 *          Descripcion :  Matrices de indice numerico
 *  
 *       Fecha creacion : 28/07/2022 05:03:04 PM
 *  Fecha actualizacion : 28/07/2022 05:03:04 PM
 *             @author  : Ing. Anibal Tillero 
 *      Documentado por : Ing. Anibal Tillero 
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero     
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 

include '../clases/class.php';

//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Matrices de indice numerico');
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

            <div class="container p-5 ">           
                <section id="minimal-statistics">

                    <?php
                    Tarjetas::Titulos("Matrices de indice numerico", "", array("class" => "text-success"));

                    $arreglo = Fechas::$arrMeses;

                    ?>
                    
                  
                    
                    
                    
                      <div class="form-group row mb-2">
                        <label for="id_meses" class="col-form-label col-md-2">Meses: </label>
                        <div class="col-md-2">
                            <div class="input-group"> 
                            <?php
                            Formularios::select('id_meses', $arreglo, 0, array('class' => 'form-select', 'title' => 'Meses', 'onchange' => '', 'onfocus' => ''));
                            ?>  
                            </div>
                        </div>
                    </div>
                    <?php
                    
                    Arreglos::setAsignar($arreglo);
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
