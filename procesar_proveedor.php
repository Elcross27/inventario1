
<?php
include 'proveedores.php'; // Incluir el archivo de conexión

// Obtener los datos enviados por el formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

// Consulta SQL para insertar los datos
$sql = "INSERT INTO proveedores (nombre, telefono, email) VALUES (?, ?, ?)";

// Preparar la consulta
$stmt = $conn->prepare($sql);

// Verificar si la consulta se preparó correctamente
if ($stmt) {
    // Bind de los parámetros (evita inyecciones SQL)
    $stmt->bind_param("sss", $nombre, $telefono, $email);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Proveedor registrado exitosamente.";
    } else {
        echo "Error al registrar el proveedor: " . $stmt->error;
    }

    // Cerrar la sentencia
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<!-- Botón para volver a la página de proveedores -->
<a href="proveedores.php" class="btn">Volver a Proveedores</a>