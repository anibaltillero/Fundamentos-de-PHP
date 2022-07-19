<?php 
/**
 * HTML helper class. Provides generic methods for generating various HTML
 * tags and making output HTML safe.
 *
 * @package    Kohana
 * @category   Helpers
 * @author     Kohana Team
 * @copyright  (c) 2007-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class HTML {

	/**
	 * @var  array  preferred order of attributes
	 */
	public static $attribute_order = array
	(
		'action',
		'method',
		'type',
		'id',
		'name',
		'value',
		'href',
		'src',
		'width',
		'height',
		'cols',
		'rows',
		'size',
		'maxlength',
		'rel',
		'media',
		'accept-charset',
		'accept',
		'tabindex',
		'accesskey',
		'alt',
		'title',
		'class',
		'style',
		'selected',
		'checked',
		'readonly',
		'disabled',
	);

	/**
	 * @var  boolean  use strict XHTML mode?
	 */
	public static $strict = TRUE;

	/**
	 * @var  boolean  automatically target external URLs to a new window?
	 */
	public static $windowed_urls = FALSE;

	/**
	 * Convert special characters to HTML entities. All untrusted content
	 * should be passed through this method to prevent XSS injections.
	 *
	 *     echo HTML::chars($username);
	 *
	 * @param   string  $value          string to convert
	 * @param   boolean $double_encode  encode existing entities
	 * @return  string
	 */
	public static function chars($value, $double_encode = TRUE)
	{
		return htmlspecialchars( (string) $value, ENT_QUOTES, Configuraciones::$charset, $double_encode);
	}

	/**
	 * Convert all applicable characters to HTML entities. All characters
	 * that cannot be represented in HTML with the current character set
	 * will be converted to entities.
	 *
	 *     echo HTML::entities($username);
	 *
	 * @param   string  $value          string to convert
	 * @param   boolean $double_encode  encode existing entities
	 * @return  string
	 */
	public static function entities($value, $double_encode = TRUE)
	{
		return htmlentities( (string) $value, ENT_QUOTES, Configuraciones::$charset, $double_encode);
	}

       /**
	 * Create HTML link anchors. Note that the title is not escaped, to allow
	 * HTML elements within links (images, etc).
	 *
	 *     echo HTML::anchor('/user/profile', 'My Profile');
	 *
	 * @param   string  $uri        URL or URI string
	 * @param   string  $title      link text
	 * @param   array   $attributes HTML anchor attributes
	 * @param   mixed   $protocol   protocol to pass to URL::base()
	 * @param   boolean $index      include the index page
	 * @return  string
	 * @uses    URL::base
	 * @uses    URL::site
	 * @uses    HTML::attributes
	 */
	public static function anchor($uri, $title = NULL, array $attributes = NULL )
	{
		if ($title === NULL) 
                {
			// Use the URI as the title
			$title = $uri;
		}

                
                
		if ($uri === '')
		{
			// Only use the base URL
			$uri = '';
		}
		else
		{
			if (strpos($uri, '://') !== FALSE)
			{
				if (HTML::$windowed_urls === TRUE AND empty($attributes['target']))
				{
					// Make the link open in a new window
					$attributes['target'] = '_blank';
				}
			}
			elseif ($uri[0] !== '#')
			{
				// Make the URI absolute for non-id anchors
				$uri = $uri;
			}
		}

		// Add the sanitized link to the attributes
		$attributes['href'] = $uri;

		echo '<a'.HTML::attributes($attributes).'>'.$title.'</a>';
	}

        
        
        /**
	 * Creates an HTML anchor to a file. Note that the title is not escaped,
	 * to allow HTML elements within links (images, etc).
	 *
	 *     echo HTML::file_anchor('media/doc/user_guide.pdf', 'User Guide');
	 *
	 * @param   string  $file       name of file to link to
	 * @param   string  $title      link text
	 * @param   array   $attributes HTML anchor attributes
	 * @param   mixed   $protocol   protocol to pass to URL::base()
	 * @param   boolean $index      include the index page
	 * @return  string
	 * @uses    URL::base
	 * @uses    HTML::attributes
	 */
	public static function file_anchor($file, $title = NULL, array $attributes = NULL)
	{
		if ($title === NULL)
		{
			// Use the file name as the title
			$title = basename($file);
		}

		// Add the file link to the attributes
		//$attributes['href'] = URL::site($file, $protocol, $index);
                $attributes['href'] = $file;
                
		echo '<a'.HTML::attributes($attributes).'>'.$title.'</a>';
	}

        
        /**
	 * Creates an email (mailto:) anchor. Note that the title is not escaped,
	 * to allow HTML elements within links (images, etc).
	 *
	 *     echo HTML::mailto($address);
	 *
	 * @param   string  $email      email address to send to
	 * @param   string  $title      link text
	 * @param   array   $attributes HTML anchor attributes
	 * @return  string
	 * @uses    HTML::attributes
	 */
	public static function mailto($email, $title = NULL, array $attributes = NULL)
	{
		if ($title === NULL)
		{
			// Use the email address as the title
			$title = $email;
		}

	     echo '<a href="&#109;&#097;&#105;&#108;&#116;&#111;&#058;'.$email.'"'.HTML::attributes($attributes).'>'.$title.'</a>';
	}

    
	/**
	 * Compiles an array of HTML attributes into an attribute string.
	 * Attributes will be sorted using HTML::$attribute_order for consistency.
	 *
	 *     echo '<div'.HTML::attributes($attrs).'>'.$content.'</div>';
	 *
	 * @param   array   $attributes attribute list
	 * @return  string
	 */
	public static function attributes(array $attributes = NULL)
	{
		if (empty($attributes))
			return '';

		$sorted = array();
		foreach (HTML::$attribute_order as $key)
		{
			if (isset($attributes[$key]))
			{
				// Add the attribute to the sorted list
				$sorted[$key] = $attributes[$key];
			}
		}

		// Combine the sorted attributes
		$attributes = $sorted + $attributes;

		$compiled = '';
		foreach ($attributes as $key => $value)
		{
			if ($value === NULL)
			{
				// Skip attributes that have NULL values
				continue;
			}

			if (is_int($key))
			{
				// Assume non-associative keys are mirrored attributes
				$key = $value;

				if ( ! HTML::$strict)
				{
					// Just use a key
					$value = FALSE;
				}
			}

			// Add the attribute key
			$compiled .= ' '.$key;

			if ($value OR HTML::$strict)
			{
				// Add the attribute value
				$compiled .= '="'.HTML::chars($value).'"';
			}
		}

		return $compiled;
	}

        
        
        
        
/**
 * Metodo Inicio de la Tabla y desplegar el encabezado de la pagina web.
 *
 * @access public
 * @since  25/02/2002 05:30:39 p.m.
 **/
public static function setEncabezado() {
?>
     
   <?php
   // --------------------------------------------------------------------------
   //  Trabla Principal del las panatallas
   //---------------------------------------------------------------------------
   ?>
  <table width="<?= Configuraciones::BANNER_ANCHO ?>" align="<?= Configuraciones::BANNER_ALINEAR ?>" height="93%" border="0" cellpadding="0" cellspacing="0" >
 
<!--   <tr>
   <td height="1">
   <div align="<?= Configuraciones::BANNER_ALINEAR ?>">
     <img width="<?= Configuraciones::BANNER_ANCHO ?>" height="<?= Configuraciones::BANNER_ALTO_1 ?>" border="0" align="top" src="<?= Configuraciones::IMAGENES_RUTA . 'banner/topbolivariano.jpg' ?>">
   </div>
   </td>
   </tr>-->

   <tr valign="top">
   <td height="1">
   <div align="<?= Configuraciones::BANNER_ALINEAR ?>" >
       <img  width="<?= Configuraciones::BANNER_ANCHO?>" height="<?= Configuraciones::BANNER_ALTO_2 ?>" align="top" src="<?= Configuraciones::IMAGENES_RUTA . 'banner/banner-bottom.png' ?>">
   </div>
   </td>
   </tr>
<?php 
}   

        
  



/**
  *   Descripcion: Desplega los titulos de de las pantallas.
  * 
  *   Fecha Creacion: 16/04/2015
  *  
  *   @example HTML::setTitulos( 'Indica el Titulo' ); 
 * 
  *   @param   cadena  $titulo  Titulo de la ventana
  * 
  */
public static function setTitulos( $titulo = NULL ) {
?>
   
   
<tr>
<td valign="top" class="TITULOS"><?= $titulo ?></td>
</tr>
<?php
}      
        



/**
 * Deplegar el titulo.
 *
 * @access private
 * @since 07/07/2014 05:54:45 p.m.
 **/
public static function setColumnas( $arrColumnas , $intAcciones = 0) {
?>


<

<?php for ($i=0;$i< count( $arrColumnas ) ;$i++) { ?>
          <th scope="col"><?= $arrColumnas[$i] ?></th>
<?php } ?>

<?php
if( $intAcciones >= 1 ) {
for ($i=0;$i<$intAcciones;$i++) { ?>
          <th nowrap> &nbsp; </th>
<?php }  }?>


</tr>

<?php
}
	



/** 
 *   Descripcion    : Permite desplegar el pie de pagina del sistema.
 * 
 *  Date created    : 16/04/2015    Date updated: 16/04/2015
 *   @Author        : Anibal G. Tillero O.
 *   @Copyright    : (c) 2018 by MPPRE.
 * 
 *  @example       : HTML::setPieCSS() 
 * -----------------------------------------------------------------------------
 */
 public static function setPieCSS_old() {
    ?>

    <tr><td>
    <div class="PIE_TITULO"  align="left">
        <?= isset( $_SESSION['nombre_usuario'] )? 'USUARIO: '. $_SESSION['nombre_usuario'] : '&nbsp;' ; ?><br>
    </div>
    </td></tr>                
    
    <tr><td>
    <div id="PieDePagina" align="center">
        <?= Configuraciones::EMPRESA ?><br>
        <?= Configuraciones::INFO_DIRECCION ?><br>
        <?= Configuraciones::PROYECTO_COPYLEFT ?>
    </div>
    </td></tr>
    
    <!-- fin de la tabla principal despues del Body -->
    </table>


    <?php    
}
 

/** 
 *   Descripcion    : Permite desplegar el pie de pagina del sistema.
 * 
 *  Date created    : 16/04/2015    Date updated: 16/04/2015
 *   @Author        : Anibal G. Tillero O.
 *   @Copyright    : (c) 2018 by MPPRE.
 * 
 *  @example       : HTML::setPieCSS() 
 * -----------------------------------------------------------------------------
 */
 public static function setPieCSS() {
    ?>

  <tr valign="bottom" >
    <table width="<?= Configuraciones::BANNER_ANCHO ?>" border="0" align="<?= Configuraciones::BANNER_ALINEAR ?>" cellpadding="0" cellspacing="0" class="formColor">
        <td width="25%">
             
            <div class="PIE_TITULO"  align="left">
                
                
             <?= isset( $_SESSION['nombre_usuario'] )? 'USUARIO: '. $_SESSION['nombre_usuario'] : '&nbsp;' ; ?>
        
            </div>
         </td>   
         <td width="50%" class="PIE_TITULO"  align="RIGHT">&nbsp;</td>
         <td width="25%">
         <div class="PIE_TITULO"  align="RIGHT">
             <?= isset( $_SESSION['ejercicio'] )? 'EJERCICIO: '. $_SESSION['ejercicio'] : '&nbsp;' ; ?>
        </div>    
         
         </td>        
                 
    </table>   

    </tr>                
                   
    
      <tr valign="bottom" >
  <table width="<?= Configuraciones::BANNER_ANCHO ?>" border="0" align="<?= Configuraciones::BANNER_ALINEAR ?>" cellpadding="0" cellspacing="0" >      
    <td>
    <div id="PieDePagina" align="center">
        <?= Configuraciones::EMPRESA ?><br>
        <?= Configuraciones::INFO_DIRECCION ?><br>
        <?= Configuraciones::PROYECTO_COPYLEFT ?>
    </div>
    </td>
   </table>  
  </tr>
    
    <!-- fin de la tabla principal despues del Body -->
    </table>


    <?php    
}
        
        
        


public static function setEspacio($ancho = '92%' )  {
    
  ?><td width="<?= $ancho ?>" height="5" nowrap>&nbsp;</td><?php

  
}



        
        
}
