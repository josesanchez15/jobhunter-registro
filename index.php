<?php
 // $mysqli = new mysqli('ipaddress', 'root', '', 'BD's name');
?>
<html>
    <!--Encabizado de la pagina-->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <head>
        <title>JOB HUNTER</title>
        <div id="logo">
             <img src="img/logo.png">
        </div>
    <hr>
    </head>

    <!--Cuerpo de la pagina-->
    <body>
        <div class="body">
            <div id="registro">
                <p>* Son los Datos Minimos Requeridos y Obligatorios</p>
                <br><br>
                <label for="name">Nombre Completo *</label>
                <input type="text" id="name" name="Nombre" required>

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="Correo" required>

                <label for="password">Contraseña *</label>
                <input type="text" id="password" name="Contraseña" required>

                <label for="phone">Telefono / Celular *</label>
                <input type="text" id="phone" name="Celular" required>

                <form>
                    <label for="profile">Seleccione el Perfil *</label>
                    <select name="profile">
                        <option>Seleciones una</option>
                        <option>HUNTER</option>
                        <option>PORFESIONAL</option>
                    </select>
                </form>

        <button type="submit" class="btn btn-primary">Registrar</button>
            </div> 
        </div>
        
    </body>

    <!--Pie de la pagina-->
    <div class="footer">
        <footer>
            <hr>
            <p style="text-align: center">Universidad Latina de Costa Rica sede de Heredia</p>
            <p style="text-align: center">Estudiantes: Gary Rojas - Ignacio Sanchez</p>
            <p style="text-align: center">Proyecto de Programacion V para Ingeneria en Sistemas Computacionales</p>
        </footer>
    </footer>
</html>