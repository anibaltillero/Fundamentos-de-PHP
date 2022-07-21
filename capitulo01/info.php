<?php
/**
 *          Descripcion : Muestra la informacion del Entorno de PHP 
 *  
 *             Proyecto : FPHP5
 *          Controlador : phpinfo.php     Encoding: UTF-8
 *       Fecha creacion : 01/08/2022 11:51:46 AM
 *  Fecha actualizacion : 01/08/2022 11:51:46 AM
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
define( 'TITULO', 'CAPITULO 1: Informacion');
?>
<?php Configuracion::getDocTypeHTML() ?>
<head>
    <?php Configuracion::getCabecera( TITULO ) ?>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>

   <!-- La barra nav del Pie de la pagina -->      
    <?php Bootstrap::NavBarFixedEncabezado( TITULO ); ?> 


    <!--  Begin page content -->
    <main role="main" class="flex-shrink-0">

        <!-- contenedor -->         
        <div class="container">
            <div class="row">
                <div class="col-md-12 table-responsive">




                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                           

                            <?php
                             // Agregar codigo aqui..
                             Informacion::info();
                            ?>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!-- Fin contenedor -->  

</main>
        <!-- La barra nav del Pie de la pagina -->         
        <?php Bootstrap::NavBarPie(); ?>
        
        <!-- Lastest compiler an minifield Javascrip -->         
        <?php Configuracion::Js(); ?>
        
    </body>
</html>
