<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="iniciocompletado.php" method="post">
        <h1>Inicio de sesión</h1>
        <hr>              
        <?php
        if (isset($_GET['error'])) {
            ?>
            <p class="error">
            <?php
            echo $_GET['error'];
            ?>
            </p>
            <?php
        }
        ?>

        <div>
            <label for="email">Correo: </label>
            <input type="email" class="email" id="email" name="email" placeholder="Ingresa tu correo">
        </div>

        <div>
            <label for="contrasena">Contraseña: </label>
            <input type="password" class="contrasena" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña">
        </div>

        <div>
            <input type="submit" value="Ingresar">
            
        </div>   

        <div>
            <p>¿No tienes cuenta?</p>
            <input type="submit" value="Registrarse" formaction="registro.php">

        </div>
    </form>
</body>
</html>
