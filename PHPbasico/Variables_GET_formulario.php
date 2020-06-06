<!DOCTYPE HTML>

<html lang = "es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>

    <body>

        <h1>Formulario PHP</h1>

        <form method="GET" action="Recibir_Formulario.php">

            <p>
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre"/>
            </p>

            <p>
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="Apellidos"/>
            </p>

            <input type="submit" value="Enviar datos">
        </form>

    </body>

</html>
