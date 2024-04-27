
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registroCompleto.php" method="post">
        <h1>Registro</h1>
        <div>
            <hr>
            <label for="nombre">Nombre: </label>
            <input type="text" class="form" id="nombre" name="nombre"  placeholder="Ingresa tu nombre">
        </div>

        <div>
            <label for="email">Correo: </label>
            <input type="email" class="form" id="email" name="email"  placeholder="Ingresa tu correo">
        </div>

        <div>
            <label for="contrasena">Contraseña: </label>
            <input type="password" class="form" id="contrasena" name="contrasena"  placeholder="Ingresa tu contraseña">
        </div>

        <div>
        <input type="submit" value="Enviar">
        </div>        
    </form>

</body>
</html>