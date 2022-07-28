<?php

// Creamos la variable que contiene la imagen
// Uso de la librería imagick
$im = new imagick("01.jpg");

$imageprops = $im->getImageGeometry();

// reconocimiento de la altura y ancho de la imagen
$width = $imageprops['width'];
$height = $imageprops['height'];


// Nueva altura y ancho
if($width > $height){
	$newHeight = 280;
	$newWidth = (280 / $height) * $width;

}else{
	$newWidth = 280;
	$newHeight = (280 / $width) * $height;
}

$im->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 0.9, true);

$im->cropImage (280,280,0,0);

// Escribimos la nueva imagen redimensionada
$im->writeImage( "01_280x280_test.jpg" );

// Impresion en el navegador de la imagen
echo '<img src="01_280x280_test.jpg">';
?>
