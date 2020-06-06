<?php 

//Variable constante

define('Nombre', 'Tania González');
echo '<h1>'.Nombre.'</h1>';


//Constantes Predefinidas

function Funcion(){

    echo __FUNCTION__; // Identifica el nombre de la función
}

echo '<p>'.PHP_OS.'</p>';  // Versión del sistemas operativo
echo '<p>'.PHP_VERSION.'</p>'; // Versión de PHP
echo '<p>'.__LINE__.'</p>'; // Número de línea en la que se ejecuta el echo
echo '<p>'.PHP_EXTENSION_DIR.'</p>'; // Ruta de la estensión PHP instalada
echo '<p>'.__FILE__.'</p>'; // Ruta del Archivo .php en ejecución
Funcion(); // Nombre de la función

?>