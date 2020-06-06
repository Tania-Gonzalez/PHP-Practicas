<?php 

    function GetNombre($nombre){

        $texto = "El nombre es: $nombre ";
        return $texto;
    }

    function GetApellido($apellidos){

        $texto = "El apellido es: $apellidos";
        return $texto;
    }


    function GetNombreApellido($nombre,$apellidos){

        $texto = GetNombre($nombre);

        return $texto;

    }
    
    echo GetNombreApellido("Tania","González")

?>