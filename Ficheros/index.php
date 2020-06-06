<?php 

    //ABRIR ARCHIVO    
    $Archivo = fopen("Fichero.txt","a+");

    //LEER ARCHIVO

    while(!feof($Archivo)){
        
        $Contenido= fgets($Archivo);
        echo $Contenido.'<br/>';
    }
   
    //ESCRIBIR EN UN ARCHIVO
    fwrite($Archivo, "Soy un texto agregado desde php.");


    //CERRAR ARCHIVO
    fclose($Archivo);

    //COPIAR ARCHIVO
    copy("FicheroCopia.txt", "Fichero.txt") or die('Error al copiar');

    //RENOMBRAR UN FICHERO
    rename('Fichero.txt', 'FicheroRename.txt');

    //ELIMINAR ARCHIVO
    unlink('FicheroRename.txt') or die('Erro al copiar');
    
    $Archivo = "Fichero.txt";
    $Directorio= "C:\wamp64\www\Master-PHP\Learn-PHP\Hello-World\Ficheros";
    if(file_exists($Archivo)){
        echo "El archivo ($Archivo) <b>¡Existe!</b>";
    }
    else{
        echo "El archivo ($Archivo)  <b>¡No existe!</b>";
    }

    if( file_exists($Directorio) == true ){

        echo "<p>El directorio ($Directorio) <b>¡Existe!</b></p>";
    }
    else{
        echo "El directorio ($Directorio) "."<p><<br>¡No existe!</b></p>";
    }



?>