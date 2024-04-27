<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="perfil.css">
    <title>Modificacion de Datos</title>
</head>
<body>

<div>
    <h1>Modificacion de Datos</h1>
    <hr>
<form action="modificar.php" method="post">

<label for="nuevo_email">Nuevo correo:</label>
<input type="email" id="nuevo_email" name="nuevo_email" >

<label for="nueva_contrasena">Nueva contraseña:</label>
<input type="password" id="nueva_contrasena" name="nueva_contrasena">

<input type="submit" value="Guardar cambios">
<a href="cerrar.php" class="m">Cerrar sesión</a>
</form>

</div>

</body>
</html>
