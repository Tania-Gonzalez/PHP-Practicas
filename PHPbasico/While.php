<?php 

//Bucles While

$Variable = -5;


while($Variable <= 99){


    //echo $Variable.'<br/>';
    $Variable++;

    if($Variable == 100){

       // echo "$Variable Final del conteo";
    }

}

    // Ejemplos con While

    if(isset($_GET['Variable'])){
        
        $Variable = (int)$_GET['Variable'];   // Casting Casteo de una variable
    }

    else{
        $Variable = 1;
    }

    var_dump($Variable);

    // Ejemplo 2 tabla de multiplicar

    $Tabla = 10;
    $Contador = 1;

    echo "<h1>Tabla de Multiplicar del $Tabla</h1>";

    while($Contador <= 10)
    {
        
        echo "$Tabla x $Contador = ".$Tabla * $Contador.'<br/>';
        $Contador++;
    }



    // Do While

    $Edad = 18;
    $Cont= 1;
    do{
        echo " Tienes Acceso al Servidor $Cont ".'<br/>';
        $Cont++;


    } while($Edad >= 18 && $Cont <= 10);
?>