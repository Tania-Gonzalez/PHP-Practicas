<?php 

    session_start();

    $_SESSION['Resultado']= "";
    $_SESSION['Num1']= "";
    $_SESSION['Num2']= "";


    if(isset($_GET['Resultado'])){

        $_SESSION['Resultado']= $_GET['Resultado'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

    <h1>Calculadora PHP</h1>
    

    <form style="margin: 30px" method="POST" action="Calcular.php">
        <p>
            Numero 1: <input style="margin: 10px" type="number" name="Num1" value="<?= $_SESSION['Num1']?>" autofocus="autofocus"/><br/>
            Numero 2: <input style="margin: 10px" type="number" name="Num2" value="<?= $_SESSION['Num2']?>"/><br/>
            Resultado: <input style="margin: 10px" type="number" name="ResultadoFinal" disabled value="<?=$_SESSION['Resultado']?>"/>
            <input style="margin: 10px" type="submit" name="btnBorrar" value="Borrar"/><br/>
        </p>
        <input style="margin: 10px" type="submit" value="Sumar" name="btnSumar"/>
        <input style="margin: 10px" type="submit" value="Restar" name="btnRestar"/>
        <input style="margin: 10px" type="submit" value="Multiplicar" name="btnMultiplicar"/>
        <input style="margin: 10px" type="submit" value="Dividir" name="btnDividir"/>

    </form>
    
</body>
</html>

