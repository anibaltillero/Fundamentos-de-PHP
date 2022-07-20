<?php
/**
 *          Descripcion : Estaticas. 
 *  
 *          Controlador : 03_.php     Encoding: UTF-8
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



 function uf_Estatica() {

     static $contador;

    $contador++;
    
    echo "El N&uacute;mero es: $contador <br /> "; 
    
}




//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'Capitulo 02: Variables Estatiscas');
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

                    
                    <?php Tarjetas::Titulos('VARIABLE ESTATICA', ''); ?>       
                  
                    
                    <?php
            
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    uf_Estatica();
                    
                    
                    
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
