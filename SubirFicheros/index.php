<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos con php</title>
</head>
 
 <body>
     <h1>subir arhivos con php</h1>
     <!---- subir arhcivos enctype-->
     <form action="upload.php" method="POST" enctype="multipart/form-data">
         <p><input type="file" name="archivo"/></p>
         <p><input style="color: #003366; background-color: #99CCFF" type="submit" value="enviar"/></p>
     </form>

     <h1>Listado de Imagenes</h1>
     <?php 
        $Gestor= opendir('../Imagenes');
        if($Gestor){
            while(($Img = readdir($Gestor)) !== false){
                var_dump($Img);
                if($Img !='.' && $Img != '..'){
                    echo "<img src='$Gestor/$Img' width='200px'/><br/>"."";
                }
            } 
        }
     ?>
  
 </body>
  
 </html>