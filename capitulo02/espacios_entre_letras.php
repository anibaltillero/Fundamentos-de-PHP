<?php
/**
 *          Descripcion :  
 *  
 *             Proyecto : FPHP732019
 *          Controlador : espacios_entre_letras.php     Encoding: UTF-8
 *       Fecha creacion : 31-may-2019 9:45:38
 *  Fecha actualizacion : 31-may-2019 9:45:38
 *             @author  : Anibal Tillero Olarte
 *      Documentado por : Anibal Tillero Olarte
 *          @CopyLeft   : 2019 by M.P.P. RELACIONES EXTERIORES    
 *  
 */
//* ----------------------------------------------------------------------------
//* CARGAR LAS CLASES 
//* ---------------------------------------------------------------------------- 
include '../clases/class.php';

//* ----------------------------------------------------------------------------
//* DECLARACION DE VARIABLES
//* ----------------------------------------------------------------------------
define('TITULO', 'espacio entre leras');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= TITULO ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= Configuracion::$charset ?>" />
    </head>
    <body>
        <?php
        
        // funcion que elimina los doble espacios (o mas) dentro de una
// cadena, no unicamente en los extremos
        
        
        
function fun_eliminarDobleEspacios($cadena)
{
    
    

      
      
    $limpia    = "";
    $parts    = array();


    
    
    // divido la cadena con todos los espacios q haya
    $parts = explode(" ",$cadena);
   
   

    
    foreach($parts as $subcadena)
    {
        // de cada subcadena elimino sus espacios a los lados
        $subcadena = trim($subcadena);
        
        // luego lo vuelvo a unir con un espacio para formar la nueva cadena limpia
        // omitir los que sean unicamente espacios en blanco
        if($subcadena!="")
        { $limpia .= $subcadena." "; }
    }
    $limpia = trim($limpia);
    
   
    
    return $limpia;
}  



echo fun_eliminarDobleEspacios('espacios      entre      letas');



        ?>
    </body>
</html>