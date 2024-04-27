
<?php
session_start();

if (isset($_POST['nuevo_email']) && isset($_POST['nueva_contrasena'])) {
    $nuevo_email = $_POST['nuevo_email'];
    $nueva_contrasena = $_POST['nueva_contrasena'];

    $conn = new mysqli('localhost', 'root', '', 'prueba');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $id_usuario = $_SESSION['id'];

    $sql = "UPDATE usuarios SET email = ?, contrasena = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $contrasena_hasheada = password_hash($nueva_contrasena, PASSWORD_DEFAULT);
    $stmt->bind_param("ssi", $nuevo_email, $contrasena_hasheada, $id_usuario);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit(); 
    } else {
        echo "Hubo un error al modificar los datos.";
    }

    $stmt->close();
    $conn->close();
}
?>
