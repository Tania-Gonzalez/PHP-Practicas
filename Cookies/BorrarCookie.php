<?php 

    if(isset($_COOKIE['MiCookie'])){

        unset($_COOKIE['MiCookie']);
        echo 'La cookie fue borrada';
        setcookie('MiCookie','', time()-100);

    };

    header('Location:VerCookies.php');


?>