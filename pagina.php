<?php

session_start();
include 'conexion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="modificar.css">
    <title>Pagina Final</title>
</head>
<body>
    <div>
    <h1> Pagina final</h1>
    <hr>
    <a href="perfil.php" class="m">Modificar correo o contraseña</a>
    <a href="cerrar.php" class="m">Cerrar sesión</a>
    <a href="eliminar.php" class="m">Eliminar sesion</a>
    </div>
    
</body>
</html>