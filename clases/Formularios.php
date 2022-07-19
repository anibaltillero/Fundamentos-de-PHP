<?php
/**
 * Form helper class. Unless otherwise noted, all generated HTML will be made
 * safe using the [HTML::chars] method. This prevents against simple XSS
 * attacks that could otherwise be triggered by inserting HTML characters into
 * form fields.
 *
 * @package    Kohana
 * @category   Helpers
 * @author     Kohana Team
 * @copyright  (c) 2007-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Formularios {
  
    /**
     * Generates an opening HTML form tag.
     *
     *     // Form will submit back to the current page using POST
     *     echo Form::open();
     *
     *     // Form will submit to 'search' using GET
     *     echo Form::open('search', array('method' => 'get'));
     *
     *     // When "file" inputs are present, you must include the "enctype"
     *     echo Form::open(NULL, array('enctype' => 'multipart/form-data'));
     *
     * @param   mixed   $action     form action, defaults to the current request URI, or [Request] class to use
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Request::instance
     * @uses    URL::site
     * @uses    HTML::attributes
     */
    public static function Open($action = NULL, array $attributes = NULL, $imagenes = FALSE) {

        // Add the form action to the attributes
        $attributes['action'] = $action;

        // Only accept the default character set
        $attributes['accept-charset'] = Configuraciones::$charset;


        if (!isset($attributes['method'])) {
            // Use POST method
            $attributes['method'] = 'post';
        }

        if ($imagenes === TRUE) {
            // Use POST method
            $attributes['enctype'] = 'multipart/form-data';
        }

        echo '<form' . HTML::attributes($attributes) . '>';
    }

    /**
     * Creates the closing form tag.
     *
     *     echo Form::close();
     *
     * @return  string
     */
    public static function close() {
        echo '</form>';
    }

    /**
     * Creates a form input. If no type is specified, a "text" type input will
     * be returned.
     *
     *     echo Form::input('username', $username);
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    HTML::attributes
     */
    public static function input($name, $value = NULL, array $attributes = NULL) {
        // Set the input name
        $attributes['name'] = $name;

        if (!isset($attributes['id'])) {
            // Default type is text
            $attributes['id'] = $name;
        }


        // Set the input value
        $attributes['value'] = $value;

        if (!isset($attributes['type'])) {
            // Default type is text
            $attributes['type'] = 'text';
        }
        
        
        
       echo '<input' . Html::attributes($attributes) . ' />';
                        
    }
    
    /**
     * Creates a hidden form input.
     *
     *     echo Form::hidden('csrf', $token);
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Form::input
     */
    public static function hidden($name, $value = NULL, array $attributes = NULL) {
        $attributes['type'] = 'hidden';

        echo Formularios::input($name, $value, $attributes);
    }
    
     /**
     * Creates a password form input.
     *
     *     echo Form::password('password');
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Form::input
     */
    public static function password($name, $value = NULL, array $attributes = NULL) {
        $attributes['type'] = 'password';

        echo Formularios::input($name, $value, $attributes);
    }

    /**
     * Creates a file upload form input. No input value can be specified.
     *
     *     echo Form::file('image');
     *
     * @param   string  $name       input name
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Form::input
     */
    public static function file($name, array $attributes = NULL) {
        $attributes['type'] = 'file';

        echo Formularios::input($name, NULL, $attributes);
    }

    
    /**
     * Creates a checkbox form input.
     *
     *     echo Form::checkbox('remember_me', 1, (bool) $remember);
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   boolean $checked    checked status
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Form::input
     */
    public static function checkbox($name, $value = NULL, $checked = FALSE, array $attributes = NULL) {
        $attributes['type'] = 'checkbox';

        if ($checked === TRUE) {
            // Make the checkbox active
            $attributes[] = 'checked';
        }

        echo Formularios::input($name, $value, $attributes);
    }

    

    /**
     * Creates a radio form input.
     *
     *     echo Form::radio('like_cats', 1, $cats);
     *     echo Form::radio('like_cats', 0, ! $cats);
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   boolean $checked    checked status
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Form::input
     */
    public static function radio($name, $value = NULL, $checked = FALSE, array $attributes = NULL) {
        $attributes['type'] = 'radio';

        if ($checked === TRUE) {
            // Make the radio active
            $attributes[] = 'checked';
        }

        echo Formularios::input($name, $value, $attributes);
    }    
    
    

    /**
     * Creates a textarea form input.
     *
     *     echo Form::textarea('about', $about);
     *
     * @param   string  $name           textarea name
     * @param   string  $body           textarea body
     * @param   array   $attributes     html attributes
     * @param   boolean $double_encode  encode existing HTML characters
     * @return  string
     * @uses    HTML::attributes
     * @uses    HTML::chars
     */
    public static function textarea($name, $body = '', array $attributes = NULL, $double_encode = TRUE) {
        // Set the input name
        $attributes['name'] = $name;
     


        // Add default rows and cols attributes (required)
        $attributes += array('rows' => 10, 'cols' => 50);

        echo '<textarea' . HTML::attributes($attributes) . '>' . HTML::chars($body, $double_encode) . '</textarea>';
    }
    
    /**
     * Creates a select form input.
     *
     *     echo Form::select('country', $countries, $country);
     *
     * [!!] Support for multiple selected options was added in v3.0.7.
     *
     * @param   string  $name       input name
     * @param   array   $options    available options
     * @param   mixed   $selected   selected option string, or an array of selected options
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    HTML::attributes
     */
    public static function select($name, array $options = NULL, $selected = NULL, array $attributes = NULL ) {
        // Set the input name
        $attributes['name'] = $name;
        $attributes['id'] = $name;
        
        
        if (is_array($selected)) {
            // This is a multi-select, god save us!
            $attributes[] = 'multiple';
        }

        if (!is_array($selected)) {

            if ($selected === NULL) {
                // Use an empty array
                $selected = array();
            } else {
                // Convert the selected options to an array
                $selected = array((string) $selected);
            }
        }

        if (empty($options)) {
            // There are no options
            $options = '';
        } else {
            foreach ($options as $value => $name) {
                if (is_array($name)) {
                    // Create a new optgroup
                    $group = array('label' => $value);

                    // Create a new list of options
                    $_options = array();

                    foreach ($name as $_value => $_name) {
                        // Force value to be string
                        $_value = (string) $_value;

                        // Create a new attribute set for this option
                        $option = array('value' => $_value);

                        if (in_array($_value, $selected)) {
                            // This option is selected
                            $option[] = 'selected';
                        }

                        // Change the option to the HTML string
                        $_options[] = '<option' . HTML::attributes($option) . '>' . HTML::chars($_name, FALSE) . '</option>';
                    }

                    // Compile the options into a string
                    $_options = "\n" . implode("\n", $_options) . "\n";

                    $options[$value] = '<optgroup' . HTML::attributes($group) . '>' . $_options . '</optgroup>';
                } else {
                    // Force value to be string
                    $value = (string) $value;

                    // Create a new attribute set for this option
                    $option = array('value' => $value);

                    if (in_array($value, $selected)) {
                        // This option is selected
                        $option[] = 'selected';
                    }

                    // Change the option to the HTML string
                    $options[$value] = '<option' . HTML::attributes($option) . '>' . HTML::chars($name, FALSE) . '</option>';
                }
            }

            // Compile the options into a single string
            $options = "\n" . implode("\n", $options) . "\n";
        }

        echo '<select' . HTML::attributes($attributes) . '>' . $options . '</select>';
    }
    
    /**
     * Creates a submit form input.
     *
     *     echo Form::submit(NULL, 'Login');
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    Form::input
     */
    public static function submit($name, $value, array $attributes = NULL) {
        $attributes['type'] = 'submit';

        echo Formularios::input($name, $value, $attributes);
    } 


    /**
     * Creates a image form input.
     *
     *     echo Form::image(NULL, NULL, array('src' => 'media/img/login.png'));
     *
     * @param   string  $name       input name
     * @param   string  $value      input value
     * @param   array   $attributes html attributes
     * @param   boolean $index      add index file to URL?
     * @return  string
     * @uses    Form::input
     */
    public static function image($name, $value, array $attributes = NULL, $index = FALSE) {
        if (!empty($attributes['style'])) {
            if (strpos($attributes['style'], 'width') === FALSE) {
                $attributes['style'] = 'width:25%';
            }
        } else {
            $attributes['style'] = 'width:25% ; height:50%';
        }


        $attributes['type'] = 'image';

        echo Formularios::input($name, $value, $attributes);
    }
 
    /**
	 * Creates a button form input. Note that the body of a button is NOT escaped,
	 * to allow images and other HTML to be used.
	 *
	 *     echo Form::button('save', 'Save Profile', array('type' => 'submit'));
	 *
	 * @param   string  $name       input name
	 * @param   string  $body       input value
	 * @param   array   $attributes html attributes
	 * @return  string
	 * @uses    HTML::attributes
	 */
	public static function button($name, $body, array $attributes = NULL)
	{
		// Set the input name
                $attributes['id'] = $name;
		$attributes['name'] = $name;
                $attributes['style'] = 'cursor: hand';
                                
		return '<button'.HTML::attributes($attributes).'>'.$body.'</button>';
	}

    /**
     * Creates a form label. Label text is not automatically translated.
     *
     *     echo Form::label('username', 'Username');
     *
     * @param   string  $input      target input
     * @param   string  $text       label text
     * @param   array   $attributes html attributes
     * @return  string
     * @uses    HTML::attributes
     */
    public static function label($input, $text = NULL, array $attributes = NULL) {
        if ($text === NULL) {
            // Use the input name as the text
            $text = ucwords(preg_replace('/[\W_]+/', ' ', $input));
        }

        // Set the label target
        $attributes['for'] = $input;
     
        
        
        echo '<label' . HTML::attributes($attributes) . '>' . $text . '</label>';
    }

    
    
    
    
  
    
    
    
}