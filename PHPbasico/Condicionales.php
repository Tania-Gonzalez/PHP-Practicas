<?php 

    /*Condicionales

    //IF

    if(Condicion){
        instruccion primaria
    }
    else{
        instrucciones secudaria
    }

    // Operadies de comparación
    ==   Es igual
    ===  Identico en tipo y contenido
    !=   Diferente
    <>   Diferente
    !==  No igual
    <    Menor que
    >    Mayor
    <=   Menor o igual
    >=   Mayor o igual

    */

    $Color = "Azul";

    if($Color == "Morado")
    {
        echo "Cierto".'<br/>';

    }

    else{
        echo "Falso".'<br/>';
    }

    $year = 2020;

   if($year == 2020)
    {
        echo "Cierto".'<br/>';

    }

    else{
        echo "Falso".'<br/>';
    }


    // Else If

    $dia = 8;
    
    if($dia == 6){

        echo "Hoy es Lunes".'<br/>';
    }

    elseif($dia == 7){
        echo "Hoy es Martes".'<br/>';
    }

    elseif($dia == 8){

         echo "Hoy es Miércoles".'<br/>';

    }


    /* Ejemplo  Operador lógico 
        && AND Y
        || OR  O
        !  NOT NO

    */

    $Edad1 = 18;
    $Edad2 = 64;
    $Edad_Oficial = 20;

    if($Edad_Oficial >= $Edad1 && $Edad_Oficial <= $Edad2){
        echo "ESTA ES LA EDAD DE TRABAJAR".'<br/>';
    }
    else {
            
        echo "No está en edad de trabajar";
    }

    $Pais = "México";

    if($Pais == "México" || $Pais == "España" || $Pais =="Colombia"){

        echo "En este país se hablas español : $Pais";
    }

    else {
        echo "No se habla español";
    }
    

?>
