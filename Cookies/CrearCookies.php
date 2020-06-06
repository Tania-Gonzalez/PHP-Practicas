<?php 

    /* Cookies: Es un fichero que se almacena en el ordenador del usuario
    que visita la web con el fin de recordar datos o rastear el comportamiento
    del mismo en la web

    */

    //setcookie("Nombre","Valor que solo se puede ser texo", Caducidad, Ruta, Dominio);

    //cookie básica
    setcookie("MiCookie", "Valor de mi galleta");

    //Cookie con expiración
    setcookie("UnYear", "Valor de mi cookie de 365 días", time()+(60*60*24*365));


        
    header('Location:VerCookies.php');
?>


