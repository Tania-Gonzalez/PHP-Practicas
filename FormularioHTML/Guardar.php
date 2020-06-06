<?php 

    if(isset($_POST['Titulo']) && isset($_POST['Descripcion'])){

        echo '<h1>'.$_POST['Titulo'].'</h1>';
        echo '<h1>'.$_POST['Descripcion'].'</h1>';    
    }
?>