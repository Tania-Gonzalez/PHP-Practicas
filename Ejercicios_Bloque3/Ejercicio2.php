<?php 
    /* Ejercicio2: 
    1. Crear una función
    2. Validar un email con filter_var
    3. Recoger una variable por get y validarla
    */

    function ValidaEntrada($Email){

        $Mensaje= "Correo no valido";
        
        if(!empty($Email) && filter_var($Email,FILTER_VALIDATE_EMAIL)){

            echo "Correo valido: ".$Email;
                
        }
        else{
                echo 'Correo no valido: '.$Email;
            }

    }

    if(isset($_GET['Correo'])){
        ValidaEntrada($_GET['Correo']);
    }
    else{
        echo '<b><h2>Ingresa un Correo por Get:</b> ?Correo=TuCorreo </h2>';
    }
  
?>
