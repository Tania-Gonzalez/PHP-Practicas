
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset ="utf-8"/>
    <tittle>Formularios PHP y HTML</tittle>

</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype ="multipart/form-data">

        <label for ="Nombre">Nombre:</label> 
        <p><input type= "text" name="Nombre" autofocus="autofocus"/></p>

        <label for ="Apellido">Apellido:</label>
        <p><input type= "text" name="Apellido" placeholder= "Apellido" /></p>
       
        <label for ="Sexo">Sexo:</label> 
        <p>
            Hombre:<input type= "checkbox" name="Sexo" value="Hombre"/>
            Mujer:<input type= "checkbox" name="Sexo" value="Mujer" checked="checked"/>
        </p>

        <label for ="Color">Color:</label> 
        <p><input type= "color" name="Color" /></p>

        <label for ="Fecha">Fecha:</label> 
        <p><input type= "date" name="Fecha" /></p>

        <label for ="Correo">Correo:</label> 
        <p><input type= "email" name="Correr"/></p>

        <label for ="Archivo">Archivo:</label> 
        <p><input type= "file" name="Archivo" multiple="multiple"/></p>

        <label for ="Correo">Correo:</label> 
        <p><input type= "hidden" name="Correo"/></p>

        <label for ="Numero">Numero:</label> 
        <p><input type= "number" name="Numero"/></p>

        <label for ="Contraseña">contraseña:</label> 
        <p><input type= "password" name="Cntraseña"/></p>


        <label for ="Continente">Continente:</label> 
        <p>
            America del sur::<input type= "radio" name="continente" value="America del sur"/>
            Europa:<input type= "radio" name="Continente" value="Europa" />
            Asia:<input type= "radio" name="Continente" value="Asia" />

        </p>

        
        <label for ="Tiempo"> Tiempo:</label> 
        <p><input type= "time" name="Tiempo"/></p>

        <label for ="Tel"> Teléfono:</label> 
        <p><input type= "tel" name="Tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"/></p>

        <p><label for="gsearch">Search Google:</label></p>
        <p><input type="search" id="gsearch" name="gsearch"></p>

        <label for="week">Select a week:</label>
        <input type="week" id="week" name="week">

        <p></p>

        <textarea></textarea><br/>

        Artículos:
        <select name="Articulos">
            <option value="Teclado">Teclado</option>
            <option value="Mous">Mouse</option>
            <option value="Bocinas">Bocinas</option>
            <option value="Camara">Cámara</option>
        </select>
        <br/>


       <input type= "submit" value="Enviar"/>
    </form>
</body>

</html>


