<?php

    function Nombres(){

        echo "Tania".'<br/>';
        echo "Paola".'<br/>';
        echo "Cruz".'<br/>';
        echo "González".'<br/>';
    }

    Nombres();

    //Ejemplo 2

    function Multi($numero){

        echo " Tabla de Multiplicar del $numero".'<br/>';

        for($i=1; $i <= 10; $i++){

            echo "$i x $numero = ". $i * $numero.'<br/>';


        }
    }

    if(isset ($_GET['numero'])){

        Multi($_GET['numero']);

    }

    else{

        echo "No hay número para multiplicar";
    }
       
?>