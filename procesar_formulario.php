<?php

include("con_db.php");
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Insertar los datos en la base de datos
    $stmt = $db->prepare('INSERT INTO suscriptores (nombre, email) VALUES (:nombre, :email)');
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Mostrar un mensaje de confirmación
    echo 'Gracias por suscribirte!';
}
?>