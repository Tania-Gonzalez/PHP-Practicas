<?php 
    
    session_start();  

    $_SESSION['Num1'] = $_POST['Num1'];
    $_SESSION['Num2'] = $_POST['Num2'];
    
    ValidarEntrada();


    function ValidarEntrada(){

        if(isset($_SESSION['Num1']) && isset($_SESSION['Num2'])){

            $Numero1= $_SESSION['Num1'];
            $Numero2= $_SESSION['Num2'];

            if(isset($_POST['btnSumar'])){

                Sumar($Numero1,$Numero2);
            }
            
            if(isset($_POST['btnRestar'])){

                echo $Numero1;
                echo $Numero2;

                Restar($Numero1,$Numero2);
            }
            
            if(isset($_POST['btnMultiplicar'])){

                Multiplicar($Numero1,$Numero2);
            }
            
            if(isset($_POST['btnDividir'])){

                Dividir($Numero1,$Numero2);
            }
            if(isset($_POST['btnBorrar'])){
                
                $_SESSION['Resultado']= "";
                $_SESSION['Num1']= "";
                $_SESSION['Num2']= "";
                session_destroy();
                header("Location:Ejercicio3.php");
            }

        }
        else{
    
            echo "(Ingresa dos números)";
        }

    }

    function Borrar(){

    }

    //Operaciones 

    function Sumar($Numero1,$Numero2){

        $Resultado = $Numero1 + $Numero2;
        return header("Location:Ejercicio3.php?Resultado=$Resultado");
    }

    function Restar($Numero1,$Numero2){
        
        $Resultado = $Numero1 - $Numero2;
        return header("Location:Ejercicio3.php?Resultado=$Resultado");

    }

    function Multiplicar($Numero1,$Numero2){

        $Resultado = $Numero1 * $Numero2;
        return header("Location:Ejercicio3.php?Resultado=$Resultado");
    }

    function Dividir($Numero1,$Numero2){

        $Resultado = $Numero1 / $Numero2;
        return header("Location:Ejercicio3.php?Resultado=$Resultado");    
    }
?>