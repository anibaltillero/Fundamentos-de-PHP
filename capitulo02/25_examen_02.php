<?php
/**
 *          Descripcion :  
 *  
 *             Proyecto : fphp52017
 *          Controlador : 25_examen_02.php     Encoding: UTF-8
 *       Fecha creacion : 24/06/2017 01:01:32 PM
 *  Fecha actualizacion : 24/06/2017 01:01:32 PM
 *             @author  : Ing. Anibal Tillero
 *      Documentado por : Ing. Anibal Tillero
 *          @CopyLeft   : 2017 by MPP. Para Relaciones Exteriores     
 *  
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 
include '../clases/class.php';

//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', '');
?>
<!doctype html>
<!DOCTYPE html>
<head>
    <title><?= TITULO ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Configuracion::$charset ?>" />
</head>
<body>
    <?php
    
     
$a = array( '2','4', '6', '8', '10') ;
$b = array( '3','5','7','9','11');
    

foreach ($a as $valor_a) {
  
    foreach ($b as $valor_b) {
       echo " La suma de: $valor_a + $valor_b = " . ( $valor_a + $valor_b) . "<br>";
    }
}

    ?>
</body>
</html>