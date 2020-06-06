<?php 

    /* Programa que tenga un array con 8 números
        procedimientos: 
            -Recorrerlo, Mostrarlo
            -Ordenarlo, Mostrarlo
            -Mostrar su longitud
            -Buscar un elemnto  
            -Buscar por Get
    */ 

    //Creación del array
    $ArrayEjercicio1 = [80,50,40,20,60,70,10,30];

    //Recorrer y mostrar
    echo 'Impreso por la función Var_dump()';
    var_dump($ArrayEjercicio1);

    echo 'Impreso por un foreach'.'<br/>';
    foreach($ArrayEjercicio1 as $Elemento){
        echo ($Elemento).'<br/>';
    }
    echo '<br/>';
    echo 'Impreso por un for'.'<br/>';

    for($i =0; $i < count($ArrayEjercicio1); $i++){

        echo $ArrayEjercicio1[$i].'<br/>';
    }
    echo '<br/>';
    echo 'Impreso por un Var_export'.'<br/>';

    echo var_export($ArrayEjercicio1).'<br/>'.'<br/>';

    //Ordenamiento 
    echo 'Ordenamiento de menor a mayor'.'<br/>';
    
    $Ordenado = sort($ArrayEjercicio1);// De menor a mayor
    var_dump($ArrayEjercicio1);

    echo 'Ordenamiento de mayor a menor'.'<br/>';
    $Orden = rsort($ArrayEjercicio1); //De mayor a menor
    var_dump($ArrayEjercicio1);

    echo 'Giro del array'.'<br/>';
    var_dump(array_reverse($ArrayEjercicio1));//Giro del array

    //Longitud
    $var = 10;
    echo 'La longitud del array es: '.sizeof($ArrayEjercicio1).'<br/>';
    echo 'La longitud del array es: '.count($ArrayEjercicio1).'<br/>';

    //Buscar un elemento en el array

    var_dump($ArrayEjercicio1);

    $Num = 100;
    $Token = false;
    $Index = 0;
        
        //Método 1
    $Search = array_search($Num,$ArrayEjercicio1);
     if (!empty($Search)){

        echo  "El número $Num existe en el indice $Search".'<br/>';
     }

     else{
        echo'El número no xiste'.'<br/>';

     }

        //Método 2
    for($i = 0; $i< count($ArrayEjercicio1); $i++)
    {

        if($ArrayEjercicio1[$i] == $Num)
        {

            $Token = true;
            $Index = $i;

        }
    
    }
    if($Token == true)
    {
        echo "El número $Num existe en el indice $Index".'<br/>';
    }
    else { echo'El número no xiste'.'<br/>';}
    

    //Obtener por get

    if (isset($_GET['Numero'])){

        $Token = true;
        $Numero = $_GET['Numero'];
        $Buscar =array_search($Numero,$ArrayEjercicio1);

        if($Token == true){
            echo "El número $Numero existe en el indice $Buscar".'<br/>';
        }
        else{
            echo'El número no xiste'.'<br/>';
        }

    }
?>