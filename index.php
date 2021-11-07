<?php
require 'connection.php';
  //echo "Se realizo exitozamente la conexion a la base de datos";
?>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <head>
        <title>JOB HUNTER</title>
    </head>

    <!--Cuerpo de la pagina-->
    <body>
            <section class="full">
                <div class="full-content">
                    <div class="content-logo">
                        <img src="img/logo.png">
                    </div>
                </div>
            </section>
            <section class="full-instruction">
                <div class="full-instruction-content"
                     <div class="content-instruction">
                        <br><br>
                        <p style="text-align: center">INSTRUCCIONES</p><br>
                        <p style="text-align: center">1) Todos los campos que contengan * son obligatorios</p>
                        <p style="text-align: center">2) Complete todos los campos con sus datos personales</p>
                        <p style="text-align: center">3) El perfil Hunter son para quien publica las ofertas laborales</p>
                        <p style="text-align: center">4) El perfil Profesional es para el que busca ofertas laborales</p><br>
                     </div>
            </section>
            <section>
                <div class="full-signup">
                    <div class="full-signup-content">
                         <div class="content-signup">    
                            <form action="action.php" method="POST">
                            <fieldset>
                                <legend>Cumplete la siguiente informacion</legend>
                                <br><br>
                                <label for="name">Registre su Nombre Completo *</label>
                                <input type="text" id="Nombre" name="name" required><br><br>

                                <label for="email">Registre su Correo electronico *</label>
                                <input type="email" id="Correo" name="email" required><br><br>

                                <label for="password">Registre su Contraseña *</label>
                                <input type="text" id="Contraseña" name="password" required><br><br>

                                <label for="phone">Registre su Telefono / Celular *</label>
                                <input type="text" id="Celular" name="phone" required><br><br>
                                
                                <form>
                                    <label for="profile">Seleccione el Perfil *</label>
                                    <select name="profile">
                                        <option value="null">Seleciones una</option>
                                        <option value="hunter">HUNTER</option>
                                        <option value="profesional">PORFESIONAL</option>
                                    </select>
                                </form><br><br>

                                <label for="profession">Registre su Profesion </label>
                                <input type="text" id="Profesion" name="profession" ><br><br>

                                <label for="description">Realise una brebe Descripcion Profesional </label>
                                <input type="text" id="Discripcion" name="description" ><br><br>
                                <button type="submit" onclick="proceso();">Guardar </button>
                            </fieldset>
                         </div>
                    </div>
                </div>
            </section>
    </body>
    <!--Pie de la pagina--> 
    <div class="footer">
        <footer>
            <hr>
            <p style="text-align: center">Universidad Latina de Costa Rica sede de Heredia</p>
            <p style="text-align: center">Estudiantes: Gary Rojas - Ignacio Sanchez</p>
            <p style="text-align: center">Proyecto de Programacion V para Ingeneria en Sistemas Computacionales</p>
        </footer>
    </div>     
</html>