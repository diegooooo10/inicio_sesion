<?php
if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['contrasena'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    if(!empty($nombre) && !empty($email) && !empty($contrasena)) {
        $contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

        $conn = new mysqli('localhost', 'root', '', 'prueba');
        if ($conn->connect_error){
            die('connect error: ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $email, $contrasena_cifrada);
            $stmt->execute();
            echo "<center>Datos Registrados...</center>";
        }
    } else {
        echo "<center>Por favor, completa todos los campos del formulario.</center>";
    }
} else {
    echo "<center>Error: Datos del formulario no recibidos.</center>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Registro</title>
</head>
<body>
    <div>
        <p>Da clic para regresar al inicio</p>
        
        <hr>
        <a href="index.php"><button>Inicio</button></a>
    </div>
    
</body>
</html>
