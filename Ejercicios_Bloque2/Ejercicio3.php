<?php 

    // Programa que compruebe si una variable está vacia 
    // rellnarla con texto en minusculas y mostrarlo en mayusculas
    // y negritas

    echo 'Recibir un texto y convertirlo a mayusculas y negrita'.'<br/>';
    $Texto = "Tania Paola Cruz Gonzalez";

    if (!empty($Texto)){

        echo strtoupper("<i><b>$Texto</b></i>");

    }
    else{
        echo "La variable está vacía";
    }
?>