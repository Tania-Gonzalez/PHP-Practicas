



<?php 

/*
    1) Tenga 13 digitos
    2) Sea un número (sin caracteres no numericos)
    3) No tenga repeticiones extrañas (ej 444444444, 5454545454, 299299299)
    4) Comience con 549
    4) No comience con 5490, 549111, 5494, 5495
        549 782 127  54    58
        123 456 789 1101  1213 
no a fuerzas e
*/

    $Telefono= 5491313131313; // Número valido

    EvaluarTipoNumerico($Telefono);
    EvaluarCantidadDigitos($Telefono);
    EvaluarPrefijo($Telefono);
    EvaluarRepeticiones($Telefono);
    EvaluarRepeticionesPar($Telefono);

    function EvaluarTipoNumerico($_Telefono){
        if (is_numeric($_Telefono)){
            echo "Es numérico: $_Telefono".'<br/>';
            return  true;
        }
    }

    function EvaluarCantidadDigitos($_Telefono){
        if(strlen($_Telefono)== 13){
            echo "Contiene 13 dígitos: $_Telefono".'<br/>';
            return  true;
        }
    }

    function EvaluarPrefijo($_Telefono){
        if(($Prefijo = substr($_Telefono,0,3))== 549){
            echo "Si contiene la extensión: $Prefijo".'<br/>';

            return  true;
        }
    }

    function EvaluarRepeticiones($_Telefono){

        $DiezDigitos = str_split(substr($_Telefono,3,13));
        $ContadorDigitosIguales= 0;

        for($i=0; $i < count($DiezDigitos)-1; $i++){

            if($DiezDigitos[$i] == $DiezDigitos[$i+1]){

                $ContadorDigitosIguales = $ContadorDigitosIguales + 1;
            }
            if($ContadorDigitosIguales == 9){
                echo "Existen ".($ContadorDigitosIguales + 1)." números iguales".$_Telefono.'<br/>';
                return true;
            }
        }
    }

    function EvaluarRepeticionesPar($_Telefono){

        $ContadorDigitosParIguales =0;

        for($i=5; $i < strlen($_Telefono); $i= $i+2){

            $DigitoPar1= substr($_Telefono,3,2);
            $DigitoPar2= substr($_Telefono,$i,2);

            if(( $DigitoPar1 == $DigitoPar2)){

                $ContadorDigitosParIguales = $ContadorDigitosParIguales + 1;
            }
        }
        if($ContadorDigitosParIguales == 4){ 
             echo "Contiene números consecutivos pares: ".$_Telefono;
             return true;
        }

    }
?>