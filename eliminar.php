<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $id_usuario = $_SESSION['id'];

    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario); 
    $stmt->execute();
    
    if ($stmt->affected_rows === 1) {
        header("Location: index.php");
    } else {
        echo "Hubo un error al eliminar el usuario de la base de datos.";
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "No se pudo obtener el ID del usuario de la sesión.";
}
