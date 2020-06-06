
<?php 


/*Crear un array con el contenido de la tabla
    Accion  Aventura  Deportes
    GTA     ASSASING    FIFA 19
    COD     CRASH       PES 19
    PUGB    Price of    MOTO GP 19
            persia    
    
            Cada fila en archivos separados
*/

    $TablaVideoJuegos = array(
    
        "Accion" => array("GTA","COD","PUGB"),
        "Aventura" => array("ASSASING","CRASH","Price of Persa"),
        "Deportes" => array("FIFA 19","PES 19","MOTO 19")

    );


    var_dump($TablaVideoJuegos);

    $Categorias = array_keys($TablaVideoJuegos);


?>

    <?php require_once 'Encabezado.php';?>
    <?php require_once 'Fila1.php';?>
    <?php require_once 'Fila2.php';?>
    <?php require_once 'Fila3.php';?>

<?php echo 'Tabla construida a partir de archivos diferentes'?>
