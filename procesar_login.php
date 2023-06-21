<?php
echo "helloooooooooo";
display_errors = on;
error_reporting(E_ALL);
session_start();

// Conectar a la base de datos
$db = new PDO('sqlite:usuarios.db');
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $variable = "inside login.php";
  var_dump($variable);
  // Obtener los datos del formulario
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  // Verificar las credenciales del usuario en la base de datos
  $stmt = $db->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena');
  $stmt->bindParam(':usuario', $usuario);
  $stmt->bindParam(':contrasena', $contrasena);
  $stmt->execute();
  $usuario_encontrado = $stmt->fetch(PDO::FETCH_ASSOC);
  // Si las credenciales son correctas, redirigir al usuario a otra página
  if ($usuario_encontrado) {
    header('Location: bienvenido.php');
    exit;
  } else {
    echo 'Credenciales incorrectas';
  }
}
?>