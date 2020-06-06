<?php 

    

    if(!empty($_POST['Nombre']) && !empty($_POST['Apellido']) && !empty($_POST['Edad']) && !empty($_POST['Email']) && !empty($_POST['Pass'])){
        

        $Error= false;
        $Proceso ="Campo";
        $Nombre= $_POST['Nombre'];
        $Apellido=$_POST['Apellido'];
        $Edad=(int)$_POST['Edad'];
        $Email=$_POST['Email'];
        $Pass=$_POST['Pass'];

        //header("Location:index.php?Proceso=$Proceso");

        //Validar Nombre
        if(!is_string($Nombre) || preg_match("/[0-9]/", $Nombre)){
            $Proceso= "Nombre";
            $Error= true;
            header("Location:index.php?Error=$Error&Proceso=$Proceso");
        }
        elseif(!is_string($Apellido) || preg_match("/[0-9]/", $Apellido)){
            $Proceso= "Apellido";
            $Error= true;
            header("Location:index.php?Error=$Error&Proceso=$Proceso");
        }
        elseif(!is_int($Edad) || !filter_var($Edad, FILTER_VALIDATE_INT)){
            $Proceso='Edad';
            $Error= true;
            header("Location:index.php?Error=$Error&Proceso=$Proceso");
        }
        elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
            $Proceso='Email';
            $Error= true;
            header("Location:index.php?Error=$Error&Proceso=$Proceso");
        }
        elseif(strlen($Pass)<5){
            $Proceso='Pass';
            $Error= true;
            header("Location:index.php?Error=$Error&Proceso=$Proceso");
        }
        else{
            header("Location:index.php?Error=$Error&Proceso=$Proceso");
        }   
    }
    else{

        $Error= true;
        $Proceso="FaltanDatos";
        header("Location:index.php?Error=$Error&Proceso=$Proceso");
    }

    //var_dump($_POST);
    var_dump($Proceso); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validación de Formulario</title>

    </head>
    <style>
            body {
            background-color:lightblue;
            }

            h1 {
            color:white;
            text-align: center;
            }

            p {
            font-family: verdana;
            font-size: 20px;
            }

            input {
            width: 30%;
        }
    </style>

    <body>

        
        
        <?php 
            if($Error == false){

                '<h1>'.'Datos Validados Correctamente'.'</h1>'; 
                echo '<p>'.$Nombre.'</p>';
                echo '<p>'.$Apellido.'</p>';
                echo '<p>'.$Edad.'</p>';
                echo '<p>'.$Email.'</p>';
                echo '<p>'.$Pass.'</p>';

            }
            else{
                echo '<h1>'."Datos incorrectos. Error en $Proceso".'</h1>';
            }
        ?>
        


        
        
    </body>
</html>
