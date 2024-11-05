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
        <form id="login" action="p_login.php" method="POST" onsubmit="return validarProducto()">
    <!-- ... resto del formulario ... -->
</form>
        <form action="index.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <button type="submit" class="btn">Iniciar sesión</button>
</form>
<?php
$host = "localhost";
$db = "inventario"; // Nombre de la base de datos
$user = "root";     // Usuario de MySQL
$pass = "";         // Contraseña de MySQL

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
        </form>
        <div class="links">
            <a href="forgot-password.php">¿Olvidaste tu contraseña?</a><br>
            <a href="register.php">Registrarse</a>
        </div>
    </div>

</body>
</html>
