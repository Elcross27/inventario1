<!-- login.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="index.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <button type="submit" class="btn">Iniciar sesión</button>
        </form>
        <div class="links">
            <a href="forgot-password.php">¿Olvidaste tu contraseña?</a><br>
            <a href="register.php">Registrarse</a>
        </div>
    </div>

</body>
</html>
