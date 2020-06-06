<?php 

    //Debug
    $nombre = "Tania";
    var_dump($nombre);
    
    
    //Fechas
    echo date('d-F-Y').'<br/>';
    echo date('d-M-y').'<br/>';
    echo date('D-M-Y').'<br/>';

    //Funciones Matemáticas

    echo "Raíz cuadrada de 10 es: ".sqrt(10).'<br/>';
    echo "Número aleatorio: ".rand(1,50).'<br/>';
    echo "Valor de pi: ".pi().'<br/>';
    echo "Redondeo de  2.655 es ".(round(2.655,2)).'<br/>';

    //Más funciones generales

    echo gettype($nombre).'<br/>';

    if(is_string($nombre)){

        echo "La variable es un string".'<br/>';
    }

    //Comprobar si existe una variable

    if(isset($edad)){

        echo "Existe".'<br/>';
    }
     else{
         echo "No existe".'<br/>';
     }

     //Limpirar espación en un strig con trim

     $Mensaje = "    Este es un mensaje   ";
     echo $Mensaje;

     echo "$Mensaje sin en uso de trim".'<br/>';

     echo trim("$Mensaje con el uso de trim").'<br/>';


     echo var_dump($Mensaje).'<br/>';
     echo var_dump(trim($Mensaje)).'<br/>';


     // Eliminar variables con unset()
     $Eliminar= "Variable que se elimina";
     unset($Eliminar);
     var_dump($Eliminar);

     //Comprobar variables vacias

     $text = "";

     if(empty($text)){
         echo "La variable está vacia".'<br/>';
     }
     else{
        echo "La variable tiene contenido".'<br/>';
     }

    //Contar caracteres de una cadena

    $cadena = "12345";
    echo strlen($cadena).' Caracteres contenidos en la variable de tipo string'.'<br/>';

    //Encontrar caracter la posición de inicio 

    $frase="Tania Paola Cruz Gonzalez";
    echo strpos($frase,"Cruz").'<br/>';

    
    //Remplazar palablas
    $frase = str_replace("Paola","P.",$frase);
    echo $frase.'<br/>';

    //Mayusculas y Minusculas
    echo strtolower($frase).'<br/>';
    echo strtoupper($frase).'<br/>';

?>