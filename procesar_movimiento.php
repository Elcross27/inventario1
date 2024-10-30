<?php
// Datos de conexión a la base de datos en XAMPP (local)
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

// Obtener los datos enviados por el formulario
$fecha = $_POST['fecha'];
$tipo_movimiento = $_POST['tipodm'];
$id_producto = $_POST['id_producto']; // Capturar el ID del producto seleccionado
$cantidad = $_POST['cantidad'];

// Consulta SQL para insertar los datos
$sql = "INSERT INTO movimientos (fecha, tipo_movimiento, id_producto, cantidad) VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = $conn->prepare($sql);

// Verificar si la consulta se preparó correctamente
if ($stmt) {
    // Bind de los parámetros (evita inyecciones SQL)
    $stmt->bind_param("ssii", $fecha, $tipo_movimiento, $id_producto, $cantidad);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir a la página de movimientos o mostrar mensaje de éxito
        echo "Movimiento registrado exitosamente.";
    } else {
        echo "Error al registrar el movimiento: " . $stmt->error;
    }

    // Cerrar la sentencia
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<!-- Botón para volver a la página de inicio -->
<a href="index.php" class="btn">Volver a Inicio</a>
