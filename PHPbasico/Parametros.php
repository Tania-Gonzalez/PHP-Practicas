<?php 


 

    function Calculadora($num1, $num2, $negrita = false){

        $CadenaTexto ="";

        if($negrita != false){

            $CadenaTexto.= "<h1>";
        }

        $CadenaTexto.=  "Suma: ".($num1 + $num2).'<br/>';
        $CadenaTexto.=  "Resta: ".($num1 - $num2).'<br/>';
        $CadenaTexto.=  "Multiplicación: ".($num1 * $num2).'<br/>';
        $CadenaTexto.=  "División: ".($num1 / $num2).'<br/>';


        if($negrita != false){
            $CadenaTexto.= "</h1>";


        }

        var_dump($CadenaTexto);
        return $CadenaTexto;



    }


    echo Calculadora(30,50, true);


?>