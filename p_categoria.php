<?php
include 'categoria.php'; // Incluir el archivo de conexión

// Obtener el nombre de la categoría enviada por el formulario
$nombre = $_POST['nombre'];

// Consulta SQL para insertar la nueva categoría
$sql = "INSERT INTO categorias (nombre) VALUES (?)";

// Preparar la consulta
$stmt = $conn->prepare($sql);

// Verificar si la consulta se preparó correctamente
if ($stmt) {
    // Bind de los parámetros (evita inyecciones SQL)
    $stmt->bind_param("s", $nombre);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Categoría registrada exitosamente.";
    } else {
        echo "Error al registrar la categoría: " . $stmt->error;
    }

    // Cerrar la sentencia
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<!-- Botón para volver a la página de categorías -->
<a href="categorias.php" class="btn">Volver a Categoría</a>