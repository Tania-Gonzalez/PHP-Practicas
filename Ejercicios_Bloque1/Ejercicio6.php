<!DOCTYPE HTML>
<html lag = "es">

    <head>
        <meta charset ="utf-8">
        <title>Tablas de Multiplicar</title>
    
    </head>
    
    <body> 


    
    </body>
    
</html>

<?php


    echo "<table border='1'><tr>"; // Inicio de la tabla
        echo "<tr>"; //Inicio de la fuila 1 de celdas

            for($cabecera = 1; $cabecera <= 10; $cabecera++)
            {
                echo "<td> Tabla del $cabecera </td>";


            }
        
        echo "</tr>";

        echo "<tr>"; // Fila 

            for($celda = 1; $celda <= 10; $celda++){
                
                echo '<td>'; // Datos en una celda
                
                for($tabla = 1; $tabla <= 10; $tabla++){

                    echo "$celda x $tabla = ".($celda * $tabla).'<br/>';

                }

                echo '</td>'; // Datos en una celda
                    
            }

        echo "</tr>";// Fin de la fila
    echo "</table>"; //Fin de la tabla


?>