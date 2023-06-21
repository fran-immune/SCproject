// Iniciar sesión
session_start();
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
  header('Location: index.html');
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
</head>
<body>
  <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
  <p>Esta es una página protegida. Solo puedes acceder a ella si has iniciado sesión.</p>
  <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>