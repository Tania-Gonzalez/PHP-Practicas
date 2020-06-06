<?php 

    //Programa con 4 variables de tipo 
    // int, string, boolean y  array, que imprima
    // un mesaje con el tipo de variable.
    


    $EvaluarVariables = array
    (

        'Entero' => 10,
        'String' => 'Tania Paola',
        'Boolean' => true,
        'Array' => array('a','b','c','d','e','f','g')
    
    );
    

   // echo "Contenido de la variable:  $TipoVariable".'<br/>';

    foreach($EvaluarVariables as $Posicion => $Variable){

            
        if (is_integer($Variable)){

            echo "El contenido de la variable es: $Variable y es de tipo: ".gettype($Variable).'<br/>';
        }

        if(is_string($Variable)){

            echo "El contenido de la variable es: $Variable y es de tipo: ".gettype($Variable).'<br/>';
        }
        
        if(is_bool($Variable)){

            echo "El contenido de la variable es: $Variable y es de tipo: ".gettype($Variable).'<br/>';
        }

        if(is_array($Variable)){

            echo "El contenido de la variable es:";
            echo var_dump($Variable)."y es de tipo: ".gettype($Variable).'<br/>';
        }
    }

?>