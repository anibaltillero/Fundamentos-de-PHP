<?php

 /** ----------------------------------------------------------------------------
  *         Ayudante para:
  *           Descripcion: Clases de Arreglo
  *
  *                 Clase: arreglos
  *       Fecha creacion : 23/03/2015 06:43:38 PM
  *  Fecha actualizacion : 23/03/2015 06:43:38 PM
  *             @author  : Ing. Anibal Tillero
  *      Documentado por : Ing. Anibal Tillero
  *          @CopyLeft   : 2015 by M.P.P. PARA RELACIONES EXTERIORES
  * -----------------------------------------------------------------------------
  */
 class Arreglos {

//put your code here


     private static $_arreglo;
     private static $_elementos;
     public static $_arregloURL;

   /**
      *   Descripcion: Permite convertir el arreglo para ser pasado por la URI.
      *
      * @param      array $arreglo Arreglo de datos
      * @example    Arreglos::setEnviaURL( $arreglo )
      * @return array Arreglo
      */
     public static function setEnviaURL($array) {
         Arreglos::$_arregloURL = serialize($array);
         Arreglos::$_arregloURL = urlencode(Arreglos::$_arregloURL);
         return Arreglos::$_arregloURL;
     }

     /**
      *  Descripcion: Permite recibir el arreglo que fue pasaos por la URI.
      *
      * @param      array $arreglo Arreglo de datos
      * @example    Arreglos::setEnviaURL( $_GET['arreglo'] )
      * @return array Arreglo
      */
     public static function setRecibeURL($url_array) {
         Arreglos::$_arregloURL = stripslashes($url_array);
         Arreglos::$_arregloURL = urldecode(Arreglos::$_arregloURL);
         Arreglos::$_arregloURL = unserialize(Arreglos::$_arregloURL);
         return Arreglos::$_arregloURL;
     }

     /**
      *  Descripcion: Permite asignar un arrreglo para ser procesado por los
      *               metodos de la Clase, Se verifica que el parametro sea
      *               un arreglo valido y se inicializa la variable que
      *               contendrá los valores del arreglo en la clase.
      *
      * @param      array $arreglo Arreglo de datos
      * @example    Arreglos::setAsignar( $arreglo );
      * @see        Arreglos::getMostar();   Resul: Arreglo
      *
      */
     public static function setAsignar( $arreglo) {

         if (is_array($arreglo)) {
             // creación de arreglo vacío, inicializar
             Arreglos::$_arreglo = array();

             Arreglos::$_arreglo = $arreglo;
             return True;
         } else {
             echo "Error de Asignacion: No es un Arreglo Valido!! <br>";
             return false;
         }
     }

     /**
      *  Descripcion: Permite mostar la estructura del arreglo, normal, asociativo etc.
      *
      *  @see Arreglos::setAsignar();
      *
      *  @example Arreglos::getEstructura()   //Resultado: Estructura  del arreglo
      *
      *  Array (
      *      [0] => gato
      *      [1] => perro
      *     )
      *
      */
     public static function getEstructura() {
         if (is_array(Arreglos::$_arreglo)) {
             echo '<br>ESTRUCTURA DEL ARREGLO:<br>';
             echo '<pre>';
             var_dump(Arreglos::$_arreglo);
            // return print_r(Arreglos::$_arreglo);
             echo "</pre>";
         } else {
             echo "<b>ERROR</b>: No existe un Arreglo para Mostrar su Estructura!! <br>";
         }
     }

    
     
     
     
     public static function getMostrar() {
         try {

             if (is_array(Arreglos::$_arreglo)) {
                 foreach (Arreglos::$_arreglo as $key => $value) {
                     echo $key . ' - ' . $value . '<br>';
                 }
             } else {
                 throw new Exception("No es un arreglo Valido");
             }
         } catch (Exception $e) {
             echo '<b>Error:</b> ' . $e->getMessage();
             echo '<br>Recuerde utilizar Arreglos::setAsignar($arreglo) <br>';
         }
     }
     
     
      /**
      *  Descripcion: Permite mostrar los elementos del arreglo
      *
      * @example    Arreglos::setAsignar( $arreglo );
      * @see        Arreglos::getMostar_key();   Resul: Arreglo de keys
      *
      */
     public static function getMostrar_key() {
         try {

             if (is_array(Arreglos::$_arreglo)) {
                  echo '<pre>';
                  print_r( array_keys( self::$_arreglo )) ;
                  echo '</pre>';
                 
             } else {
                 throw new Exception("No es un arreglo keys Valido");
             }
         } catch (Exception $e) {
             echo '<b>Error:</b> ' . $e->getMessage();
             echo '<br>Recuerde utilizar Arreglos::setAsignar($arreglo) <br>';
         }
     }
     
     
      /**
      *  Descripcion: Permite mostrar los elementos del arreglo
      *
      * @example    Arreglos::setAsignar( $arreglo );
      * @see        Arreglos::getMostar_valor();   Resul: Arreglo de valores
      *
      */
     public static function getMostrar_valor() {
         try {

             if (is_array(Arreglos::$_arreglo)) {
                  echo '<pre>';
                  print_r(array_values( self::$_arreglo )) ;
                  
                  echo '</pre>';
             } else {
                 throw new Exception("No es un arreglo de valores Valido");
             }
         } catch (Exception $e) {
             echo '<b>Error:</b> ' . $e->getMessage();
             echo '<br>Recuerde utilizar Arreglos::setAsignar($arreglo) <br>';
         }
     }
     
     
     

     /**
      *  Descripcion: Regresa la cantidad de elementos que conforman el arreglo.
      *
      *  @see Arreglos::setAsignar();
      *
      *  @example Arreglos::getEstructura()   //Resultado: Estructura  del arreglo
      *
      *  @return integer Cantidad de elementos.
      */
     public static function getElementos() {

         if (isset(Arreglos::$_arreglo)) {

             Arreglos::$_elementos = count(Arreglos::$_arreglo);
             echo "Cantidad de Elementos del Arreglo: " . Arreglos::$_elementos . '<br />';
         } else {
             echo "ERROR: No existe un Arreglo para Mostrar la Cantidad de elementos!! <br>";
         }
     }

     /**
      *  Descripcion: Permite mostrar los Multiples elementos del arreglo
      *
      * @example    Arreglos::setAsignar( $arreglo );
      * @see        Arreglos::getMultidimensional() //   Resul: Arreglo
      *
      */
     public static function getMultidimensional() {

         foreach (Arreglos::$_arreglo as $v1) {

             foreach ($v1 as $key => $value) {

                 echo $value . ' ';
             }
             echo '<br>';
         }
     }

     /**
      *  Descripcion: Regresa la cantidad de elementos  por indices..
      *
      *  @see Arreglos::setAsignar();
      *
      *  @example Arreglos::getMostarIndice()   //Resultado: Estructura  del arreglo
      *
      */
     public static function getMostar_indice() {

         if (isset(Arreglos::$_arreglo)) {

             for ($index = 0; $index < count(Arreglos::$_arreglo); $index++) {
                 echo Arreglos::$_arreglo[$index] . '<br>';
             }
         } else {
             echo "ERROR: No existe un Arreglo para Mostrar el Arreglo por indice!! <br>";
         }
     }

     /**
      *  Descripcion: Limpiar el arreglo de la Memoria
      *
      *  @see Arreglos::setAsignar();
      *
      *  @param array $arreglo Arreglo Asociativo utilizado.
      *
      *  @example:   Arreglos::setLimpiar( $arreglo );
      *
      */
     public static function setLimpiar() {


         if (isset(Arreglos::$_arreglo)) {

             self::$_arreglo = array();
             
         } else {
             echo "ERROR: No existe el Arreglo a limpiar!! <br>";
         }
     }

     public static function setAgregar_asociativo($key, $valor) {

         if (isset(Arreglos::$_arreglo)) {

             if (isset($key) and isset($valor)) {

                 Arreglos::$_arreglo[$key] = $valor;
             }
         } else {
             echo "ERROR: No existe un Arreglo para Agregar datos!! <br>";
         }
     }
   
     
     /**
      * Descripcion: Extra de un arreglo asociativo los:
      *              keys   como nombre de variables
      *              values como valor de las variables.
      * 
      *                 
      * @return boolean
      */
      public static function getExtraer_asociativo() {

         if (isset(Arreglos::$_arreglo)) {
                return extract( Arreglos::$_arreglo );
         } else {
             echo "ERROR: No existe un Arreglo para Agregar datos!! <br>";
             return false;
         }
     }

      
     
     
     public static function setValor_asociativo($key) {

         if (isset(Arreglos::$_arreglo)) {

             if (isset($key)) {
                 echo "La llave $key su descripcion es: " . Arreglos::$_arreglo[$key] . "<br>";
             }
         } else {
             echo "ERROR: No existe un Arreglo para Agregar datos!! <br>";
         }
     }

     public static function setflip() {
         Arreglos::$_arreglo = array_flip(Arreglos::$_arreglo);
     }

     /**
      *  Descripcion: Retorna la frecuencias de los valores que coinciden
      *               en la matriz
      *
      *  $arreglo = array('Hombre','Mujer','Hombre','Mujer','Mujer');
      *  echo array_count_values( $arreglo)
      *
      *  @see Arreglos::setAsignar();
      *
      *  @example Arreglos::setCountValue()
      *  @return arreglo Hombres - 2  Mujeres - 3
      */
     public static function setCountValue() {
         Arreglos::$_arreglo = array_count_values(Arreglos::$_arreglo);
     }

     public static function setOrdenar() {
         asort(Arreglos::$_arreglo);
     }

     public static function array_insert(& $array, $position, $insert) {
         if (is_int($position)) {
             array_splice($array, $position, 0, $insert);
         } else {
             $pos = array_search($position, array_keys($array));

             $array = array_merge(
                     array_slice($array, 0, $pos), $insert, array_slice($array, $pos)
             );
         }
     }

     /**
      *  Descripcion: Permite mostrar los elementos del arreglo de datos
      *               personalizado.
      *
      * @example    Arreglos::setAsignar( $arreglo );
      * @see        Arreglos::getMostar_datos();   Resul: Arreglo
      *
      */
     public static function getMostrar_datos() {

         echo '<b> Desplegar datos personales </b><br>';
         echo 'El Solicitante :' . Arreglos::$_arreglo['nombre'] . '<br>';
         echo 'Correo :' . Arreglos::$_arreglo['correo'] . '<br>';
         echo 'Idioma :' . Arreglos::$_arreglo['idioma'];
     }

     /**
      *  Descripcion: Permite mostrar los elementos del arreglo de datos
      *               personalizado.
      *
      * @example    Arreglos::setAsignar( $arreglo );
      * @see        Arreglos::getMostar_datos();   Resul: Arreglo
      *
      */
     public static function getListas($arreglo, $nombre, $valor_defecto = '', $titulo = '') {

         echo "<div class='caja'>";
         echo "<select class='form-select' name='$nombre' title='$titulo'>";

         foreach ($arreglo as $key => $valor) {

             if ($valor_defecto == $key) {
                 echo "<option value='$key' selected='selected'> $valor</option>";
             } else {
                 echo "<option value='$key'> $valor </option>";
             } // fin if
         } // fin de foreach 

         echo "</select>";
         echo "</div>";
     }

     
     /**
      * Descripcion: Permite crear un arregflo asociativo a partir de un arreglo
      *              de Key y un arreglo valores
      * 
      *         $key = array( 'sky', 'grass', 'orange');
      * 
      *         $valor= array( ' blue', 'green', 'orange');
      *           
      *         array_combine($key, $valor);
      *         print_r($array);
      * 
      *         Array
      *         (
      *             [sky] => blue
      *             [grass] => green
      *             [orange] => orange
      *          )
      *  
      * @param type $key
      * @param type $valor
      * @return boolean
      */
     public static function setArreglo_combinar($key, $valor) {

     if (is_array($key) and is_array($valor)) {
             // creación de arreglo vacío, inicializar
            return array_combine($key, $valor);
        
     
         } else {
             echo "Error de Asignacion: No es un Arreglo Valido!! <br>";
             return false;
         }
     }
     
     
     
     
     
     
 }
 