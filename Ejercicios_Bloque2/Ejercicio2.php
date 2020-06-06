<?php 

    // Escribir un programa que añada valores a un array
    // mietras que su longitud sea menor a 120 y mostrarlo
    // por pamtalla

    echo "<h3>Agregando números de menores al 120 en un array </h3>";
    $ArrayEjercicio2 = [];

    for ($i = 0; $i <120; $i++)
    {


        array_push($ArrayEjercicio2, $i).'<br/>';


    }

   var_dump($ArrayEjercicio2);
    

?>