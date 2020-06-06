<?php  

    echo "<h2> CALCULADORA </h2>";

    if(isset($_GET['num1']) && isset($_GET['num2'])){

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        echo "Suma :". ($num1 + $num2).'<br/>';
        echo "Resta : ". ($num1 - $num2).'<br/>';
        echo "Multiplicación : ".($num1 * $num2).'<br/>';
        echo "División : ". ($num1 / $num2).'<br/>'; 
    }
    else{
        echo "Escribe los números de entrada por la url";
    }


?>