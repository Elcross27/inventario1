<?php
// Conexión a la base de datos
$host = "localhost";
$db = "inventario"; // Nombre de la base de datos
$user = "root";     // Usuario de MySQL
$pass = "";         // Contraseña de MySQL

// Crear la conexión
$conn = new mysql($host, $user, $pass, $db);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar el usuario
$sql = "SELECT * FROM usuarios WHERE username = ?"; // Cambia 'usuarios' por el nombre de tu tabla de usuarios
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // El usuario existe, ahora verificamos la contraseña
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) { // Asegúrate de que la contraseña esté almacenada de forma segura
        // Iniciar sesión y redirigir al usuario
        session_start();
        $_SESSION['username'] = $username; // Almacena el nombre de usuario en la sesión
        header("Location: index.php"); // Redirige a la página principal
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>