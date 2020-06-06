<?php 

    $archivo = $_FILES['archivo'];
    $Nombre = $archivo['name'];
    $Tipo= $archivo['type'];
    
    //
/*     var_dump($archivo);
    die(); */

    if($Tipo == "image/jpg" || $Tipo=="image/jpeg" || $Tipo=="image/png" || $Tipo=="image/gif"){
        
        if(!is_dir('Imagenes')){
            mkdir('Imagenes', 0777);
        
        }
        move_uploaded_file($archivo['tmp_name'],'Imagenes'.$Nombre);
        echo "<b>Nombre del archivo:</b>  $Nombre <br/><b> Tipo de archivo:</b> $Tipo";
        echo '<p>'.'<strong style= "color:green"> Imagen Subida Correctamente</strong>'.'</p>';                    
        header("Refresh: 7, URL=index.php");

    }
    else{
        header("Refresh: 7, URL=index.php");
        echo '<strong style= "color:red">'."<h1>Sube una imagen con un formato correcto:<br/> .jpg<br/> .jpeg <br/>.png <br/>.gif </h1>".'</strong>';
    }

?>