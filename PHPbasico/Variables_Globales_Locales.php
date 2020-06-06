<?php 

    /*  Variables Locales  : Son las que se definen dentro de una función
        y no pueden ser usadas fuera de la función. a no ser que se haga
        un return.
        
        Variables Globales: son las que se definen fuera de una función
        y estan disponibles dentro y fuera de las funciones.
    
    */

    $Global = "Variable Global";


    function GetMensaje(){

        global $Global; 

        echo $Global;
        $Local = "Variable Local";
       

        
        return $Local;

    }

    echo GetMensaje();

    
?>