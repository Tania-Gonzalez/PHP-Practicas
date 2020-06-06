<?php 

    //Es una colección o conjunto de datos, bajo un único nombre
     //con posiciones para cada dato

     $Pelicula = "Ironman";
     $Peliculas = array('Harry Potter','Batman','Spiderman','Avengers');
     $Cantantes = ['Rihanna','Sia','Ariana Grande','Selena Gomez'];

    var_dump($Peliculas);

    echo $Peliculas[1].'<br/>';
    echo "<p>$Cantantes[2]</p>".'<br/>';

    //Recorrer Arrays con for y foreach

    //for
    for($i = 0 ; $i < count($Peliculas); $i++){
        echo $Peliculas[$i] .'<br/>';
    }
    echo '<br/>';
    //Foreach
    foreach($Cantantes as $cant){

        echo $cant.'<br/>';
    }

    //Array Asociativos

    $Info = array(

    'Nombre' =>  'Tania',

    'Edad' => '24',
    'Sexo'=>'Femenino',
    'Telefono'=>'7821175493'

    );

    echo var_dump($Info['Nombre']);

    echo gettype($Info);

    // Array multidimensionales
    $Contactos = 
    array(
        array(
            'Nombre'=>'Tania',
            'Telefono'=>'7821175493',
            'Edad'=>'24'
        ),
        array(
            'Nombre'=>'Paola',
            'Telefono'=>'7821175493',
            'Edad'=>'24'
        ),
        array(
            'Nombre'=>'González',
            'Telefono'=>'7821175493',
            'Edad'=>'24'
        ),
    );

    var_dump($Contactos);
    echo $Contactos['1']['Telefono'];


    foreach($Contactos as $Indice => $Datos){
        var_dump($Datos['Nombre']);

    }


    //funciones para arrays

        //Ordenamiento de un Array
        $Colores = ['Morado','Azul','Rosa','Café','Verde','Naranja'];
        $Num = [1,8,5,3,0,6];

        asort($Colores); //Ordenamiento alfabetico de A - Z
        echo var_dump($Colores);//Ordenamiento alfabetico de Z - A
        arsort($Colores);
        echo var_dump($Colores);
        sort($Num);//Ordenamiento númérico de menor a mayor
        echo var_dump($Num);
        
        //Agregar elementos al array
        $Colores[]='Lila';
        var_dump($Colores);

        //Eliminar elementos de un array
        array_push($Colores,"Negro");
        var_dump($Colores);
        array_pop($Colores); // Elimina el utimo de la lista
        var_dump($Colores);
        unset($Colores[5]); //Elimina un elemento del array en una pocisión específica
        var_dump($Colores);
        
        //Elemento aleatorio de un array
        echo array_rand($Colores).'<br/>';
        $indice = array_rand($Colores);
        echo $Colores[$indice]." Indice: ".$indice;

        //Ordenamiento descendente de un array
        
        var_dump(array_reverse($Colores));

        //Buscar dentro de un array
        $Busqueda = array_search('Rosa',$Colores);
        var_dump($Busqueda);

        //Contar número de elementos de un array
        echo count($Colores);
        echo '<br/>';
        echo sizeof($Colores);
        var_dump($Colores);

        //Convertir un string en un array
        $Cadena = "Tania Paola";
        $conversion = str_split($Cadena);
        var_dump($conversion);

        //Unión de varios arrays
        var_dump(array_merge($Peliculas,$Cantantes,$Colores));
        var_export($Colores);
?>