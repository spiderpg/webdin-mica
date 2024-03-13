<?php
    include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<image>
<img src="imagenes/portada/viajemos2.png" alt="Banner" width="400" height="100">
    <HR SIZE=10>
</image>

<header>
  <nav>
	<ul>
    <li><h3><a href="index.php">Inicio</a></h3></li>
    <li><h3><a href="consulta.php">Consulta</a></h3></li>
	</ul>
  </nav>
</header>
<body>

<main>
    <img src="imagen/cliente.png" alt="Imagen" width="150" height="150">
    <h2>Formulario de Registro</h2>
    <h3> Favor de llenar todos los campos y revisar su información antes de enviar </h3>
    <br>

    <form action="conexion.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="varchar" id="nombre" name="nombre" required><br><br>
        <br>
        <label for="domicilio">Domicilio:</label>
        <input type="varchar" id="domicilio" name="domicilio" required><br><br>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="varchar" id="telefono" name="telefono" required><br><br>
        <br>
        <label for="correo">Correo:</label>
        <input type="varchar" id="correo" name="correo" required><br><br>
        <br>
        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</main>
</body>
<footer>
    <img src="imagenes/portada/viajemos.png" alt="Logo de la empresa" width="100" height="50">
    <p>Copyright © 2024 WebDesinger Eduardo Reyes Pérez</p>
  </footer>
</html>