<?php 

/*Ejercicio1 : Crear una sesión que aumente su valor
    en uno o disminuya en funcion de si del parametro
    GET counter está a uno o a cero. 
*/

    session_start();

    if(!isset($_SESSION['Numero'])){
        $_SESSION['Numero']= 0;

    }
    if(isset($_GET['counter']) && $_GET['counter'] == 1){
        $_SESSION['Numero']++;
    }
    if(isset($_GET['counter']) && $_GET['counter'] == 0){
        $_SESSION['Numero']--;
    }

?>
<h1>El valor de la sesión es <?=$_SESSION['Numero']?> </h1>
<a href="Ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="Ejercicio1.php?counter=0">Disminuir el valor</a><br/>
