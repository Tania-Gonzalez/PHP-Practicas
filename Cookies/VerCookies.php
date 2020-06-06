<?php 

    /* Para mostrar el valor de las cookies, tengo que usar
        $_COOKIE, una variable superglobal. Es una array asociativo.
    */

    if(isset($_COOKIE['MiCookie'])){

         echo '<h1>'.$_COOKIE['MiCookie'].'</h1>';

    }
    else{
        echo "No existe la cookies";
    }


    if(isset($_COOKIE['UnYear'])){

        echo '<h1>'.$_COOKIE['UnYear'].'</h1>';

    }
    else{

        echo 'La Cookie no existe';
    }
?>
<a href="CrearCookies.php">Crear cookies</a>
<a href="BorrarCookie.php"> Borrar Cookie</a>