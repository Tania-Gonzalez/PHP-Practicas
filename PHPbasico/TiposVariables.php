<?php 

    /*Tipos de datos
        Entero (int/interger) = 100
        Decimales (float/double) = 5.4
        Cadenas (string) = "Este es un string"
        Boleano (bool) = true ' false
        null
        Array (Colección de datos)
        Objetos
    */

    // Variables
    $Numero = 123.43;
    $Texto = "Es un texto";
    $Desicion = true;
    $Nula = null;
    echo gettype ($Desicion);
    echo "<p>$Texto</p>";

    // Debug
    $Mi_nombre = "Tania Paola Cruz González";

    $Array[]= "Tania";
    $Array[]= "Paola";
    $Array[]= "Cruz";
    $Array[]= "González";
    $Array[]= "<3";
    var_dump($Array);

    //Comillas simples y dobles
    $Texto1 = "Es un texto $Numero"; // concatena una variable, más lento en procesamiento
    $Texto2 = 'Es un texto'. $Numero; //Un punto de separación para concatenar

    echo $Texto1;

    // Salto de línea
    $Texto3 = "<p>Salto de línea \n</p>"; // Sólo funciona en consola
    echo $Texto3;

    //Imprimir comillas

    $Texto4 = "<p>\"Imprimiendo comillas\"</p>";
    echo $Texto4;



?>