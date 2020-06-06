<?php 

    //CREACIÓN DE DIRECTORIO-CARPETA
    $NomCarpeta='NuevaCarpeta';
    if(!is_dir($NomCarpeta)){
        mkdir($NomCarpeta, 0777) or die('No se pudo crear la carpeta');
        echo "Se ha creado la carpeta con el nombre:"."<b>$NomCarpeta</b>";
    }
    else{
        echo "Ya existe la carpeta con el nombre: "."<b>$NomCarpeta</b>";
    }

    //BORRAR LA CARPETA
    rmdir("NuevaCarpeta");

    if($Gestor = opendir('../Cookies')){
        echo "<h1>Contenido de mi carpeta ($NomCarpeta)</h1>";
        $i=-2;

        while(false !== ($Archivo = readdir($Gestor))){
            
            $i++;
   
            if($Archivo != '.' && $Archivo != '..'){
                echo $i.".-$Archivo".'<br/>';
            }

        }

    }
    else{
        echo 'No exite la carpeta';
    }


?>