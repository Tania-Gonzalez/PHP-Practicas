<?php  

    if(isset($_GET['var1'])& isset($_GET['var2'])){

        $var1 = $_GET['var1'];
        $var2 = $_GET['var2'];

     

        if($var1 < $var2){
            
        echo "Los número entre $var1 y $var2 son :".'<br/>';

            for($i =$var1; $i <= $var2; $i++){

                echo $i.'<br/>';
            }
        }

        else{

            echo "El primer número que introduscas debe ser mayor que el segundo";
        }

    }
    


?>