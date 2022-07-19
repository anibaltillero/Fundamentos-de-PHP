<?php
/**
 *          Descripcion : mI PRIMER PROGRAMA SIMPLE CON FECHAS 
 *  
 *             Proyecto : FPHP2020
 *          Controlador : 01_simple.php     Encoding: UTF-8
 *       Fecha creacion : 11/07/2022 05:03:04 PM
 *  Fecha actualizacion : 11/07/2022 05:03:04 PM
 *             @author  : Ing. Anibal Tillero 
 *      Documentado por : Ing. Anibal Tillero 
 *          @CopyLeft   : 2022 by Ing. Anibal Tillero     
 *  
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 

include '../clases/class.php';


 $fecha = date( 'd-m-Y');
 
 
//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Simple');
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

                    
                    
                    
                     <?php Tarjetas::Titulos('Fecha en formato ES/US para trabajar con los sistemas', 'Programa simple'); ?>       
                    
                    <div class="row">   

                      <?php Tarjetas::Tablero('Fecha en Español:', Fechas::setFecha_db($fecha, 'ES') , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   
     
                      <?php Tarjetas::Tablero('Fecha formato US:', Fechas::setFecha_db($fecha, 'US') , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   
     
                    
                    </div>     
                    

                    <?php Tarjetas::Titulos('información del sistema', 'Programa simple'); ?>   

                    <div class="row">   
                    
                        <?php Tarjetas::Tablero('Hoy es:', Fechas::getHoy('ES') , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   

                        <?php Tarjetas::Tablero('Dia:', Fechas::setDia( $fecha ) , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-primary'); ?>   

                        <?php Tarjetas::Tablero('Mes:', Fechas::setMes( $fecha ) , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-secondary'); ?>   

                        <?php Tarjetas::Tablero('Año:', Fechas::setAnio( $fecha ) , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-dark'); ?>   

                        <?php Tarjetas::Tablero('Meses:', Fechas::setMeses( $fecha ) , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-info'); ?>   
  
                        <?php Tarjetas::Tablero('Día de la Semana:', Fechas::setSemanas( $fecha ) , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   

                    </div>
                    

                    <?php Tarjetas::Titulos('Instanciar la clase setIns', 'Programa simple'); ?>   
                    
                    <div class="row">   
                    <?php Fechas::setIns(); ?>    

                     <?php Tarjetas::Tablero('La Fecha de Hoy es:', Fechas::getInsDia() .'/'. Fechas::getInsMes() .'/'. Fechas::getInsAnio() , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   

                     <?php Tarjetas::Tablero('La Semana es:', Fechas::getInsSemanas() , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   
                  
                     <?php Tarjetas::Tablero('El Mes:', Fechas::getInsMeses() , Tarjetas::FA_TARJETAS_CALENDARIO, 'bg-success'); ?>   
                    </div>
                    


                    
                     <?php Tarjetas::Titulos('Listado de dias y años', 'Programa simple'); ?>       
                    
                    <div class="row">   

                        
                     <?php
     
                            echo '<pre>';
                            print_r( Fechas::lista_dias(02, 2017)) ;
                            echo '</pre>';
        
                        echo '<pre>';
                        print_r(  Fechas::lista_anios('2010', '2017') );
                        echo '</pre>';
                    ?>
                    
                    </div>     
                    
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
