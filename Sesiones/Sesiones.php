<?php 

    //Periodo de tiempo en el que el usuario de una web mantiene  
    //iniciada la sesión durante la nqvegación o al recargar la 
    //página hasta que el usuario cierre el navegador o la sesión
    //y almacena información del usuario durante la navegación, se
    // almacena todo en el servidor web lo que lo hace más seguro
    //Las sesiones deben persistir en la información de usuario
    //tener la información disponibles durante la navegación activa
    //de usuario.
    
    //Iniciar sesión

    session_start();

    $Variable_local = "Varible local accesible desde la página web en la que fue creada";

    //Variable de sesión

    $_SESSION['Variable_Sesion'] = "SESIÓN ACTIVA : Variable persistente durante la naveación del usuario en las páginas de la web";

    echo $Variable_local.'<br/>';
    echo $_SESSION['Variable_Sesion'];    

?>