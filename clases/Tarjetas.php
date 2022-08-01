<?php
 /*
  * To change this license header, choose License Headers in Project Properties.
  * To change this template file, choose Tools | Templates
  * and open the template in the editor.
  */

 /**
  * Description of Bootstrap4
  *
  * @author ServiOficina
  */
 class Tarjetas {

     
   /**
    *=========================================================================== 
    *  CONSTANTE PARA EL FONT AWESOME DE TODOS LAS TARJETA DEL TABLERO  
    *  
    *  @see URL: https://fontawesome.bootstrapcheatsheets.com
    *  @since 04/07/2020 05:54:45 p.m.
    *=========================================================================== 
    */
     
   /**
    *  @const Imagen FONT AWESOME Para la los usuarios del sistema  
    */
   CONST FA_TARJETA_USUARIOS   = 'fa fa-users fa-4x';
   
   /**
    *  @const Imagen FONT AWESOME Para identificar las Direcciones Generales.
    */
   CONST FA_TARJETA_DIRECCIONES_GENERALES   = 'fa fa-sitemap fa-2x' ;
      
   /**
    *  @const Imagen FONT AWESOME Para identificar las Direcciones Linea.
    */
   CONST FA_TARJETAS_DIRECIONES_LINEAS = 'fa fa-sitemap fa-2x';
   
   /**
    *  @const Imagen FONT AWESOME Para identificar las Coordinaciones .
    */
   CONST FA_TARJETAS_COORDINACIONES  = 'fa fa-sitemap fa-2x' ;
   
   
   CONST FA_TARJETAS_CALENDARIO  = 'fa fa-calendar fa-4x';
  
   
   
   
   

   /**
    * Descripcion: Crea un titulo princiapl con subtitulo y se le puede pasar una arreglo para   .
    *              para los atributos.
    *  
    *     echo Formularios::Titulos('titulo', 'subtitulo', array( "class"=>"text-success") );
    *
    * @param   string  $input      target input
    * @param   string  $text       label text
    * @param   array   $attributes html attributes
    * @return  string
    * @uses    HTML::attributes
    */
         
   public static function Titulos($text = NULL,  $subtitulo = NULL , array $attributes = NULL  ) {
         
       
    echo '<div class="row">';
    echo '  <div class="col-12 mt-3 mb-1">';
    echo '<h4 '.HTML::attributes($attributes).'>'.strtoupper($text).'</h4>';
    echo '    <p>' . $subtitulo . '</p>';
    echo '  </div>';
    echo '</div>';
    
   }

   
   /**
    * Descipcion: Desplega las tarjetas en el tablero segun la indormacion de la tabla especificada
    * 
    * @param type $titulo   Titulo de la tarjeta 
    * @param type $valores  Valor a mostrar  
    * @param type $faIcons  
    * * @param type $bgColor  Color de Fondo de la Tarjeta.
    */
          
    public static function Tablero($titulo = '' , $valores ='',  $faIcons= NULL, $bgColor = 'primary' ) {
     
     
    if( $faIcons === NULL ){
          $fontawesome = '' ;
    } else {
          $fontawesome = $faIcons ; 
    }
    
    
    echo '<div class="col-xl-3 col-sm-6 col-12 p-2">';                   
     echo '<div class="card shadow rounded bg-opacity-75 border-5 ' . $bgColor . '">';
                      
         echo '<div class="row">';
             echo '<div class="col-3 align-self-center">';
                 echo '<i class="m-2 ' . $fontawesome . '"></i>';
        echo '</div>';
        echo '<div class="col-9">';
                echo '<div class="card-body text-end">';
                    echo '<h5 class="card-title">' .$titulo . '</h5>';
                    echo '<span class="card-text">'. $valores.'</span>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        
    echo '</div>';
echo '</div>';               
     
         
   }
   
    
   
   


   

 }