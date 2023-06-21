<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Iniciar sesión</title>
  </head>
  <body>
    <h2>Iniciar sesión</h2>
    <form action="procesar_login.php" method="post">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" required />
      <br />
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required />
      <br />
      <input type="submit" value="Iniciar sesión" />
    </form>
  </body>
</html>
