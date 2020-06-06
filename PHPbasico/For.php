<?php 

$Resultdo = 0;
for($Contador = 1; $Contador <= 100 ; $Contador++){

     $Resultdo +=+ $Contador;
     echo $Resultdo.'<br/>';

}
echo "El resultado es:  $Resultdo".'<br/>';


//Tabla de Multiplicar

$Tabla = 10;

for($i = 1; $i <= 10 ; $i++){

    echo "$Tabla x $i = ".$Tabla * $i.'<br/>';

    if($i == 10){

        echo 'Termina la tabla';
    break;

    }

}

?>