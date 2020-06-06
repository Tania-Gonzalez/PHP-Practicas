<?php  

    if(isset($_GET['var1'])& isset($_GET['var2'])){

        $var1 = $_GET['var1'];
        $var2 = $_GET['var2'];

        if($var1 < $var2){

        echo 'Números pares e impares de un rango de números'.'<br/>';
        echo "Los número entre $var1 y $var2 son :".'<br/>';

            for($i =$var1; $i <= $var2; $i++){

                if ($i % 2 == 1){
                    echo "$i es par ".'<br/>';

                }
                else{
                    echo "$i es impar ".'<br/>';


                }
    
            }
        }

        else{

            echo "El primer número que introduzcas debe ser menor que el segundo";
        }
    }

?>