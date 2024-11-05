<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoría</title>
    <link rel="stylesheet" href="styles.css"> <!-- Asegúrate de enlazar el archivo CSS -->
</head>
<body>
    <!-- Barra de navegación -->
    
    <nav class="navbar">
        <div class="logo">
            <h1 style="color: white;">Inventario</h1> <!-- Título o logo -->
        </div>
        <div>
            <a href="index.php" class="active">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="proveedores.php">Proveedores</a>
            <a href="categoria.php">Categorías</a>
            <a href="movimientos.php">Movimientos</a>
            <a href="login.php" class="btn">Iniciar Sesión</a>
        </div>
    </nav>


    <!-- Contenido de la página -->
    <div class="container">
        <h1>Categoría</h1>
        
    <!-- ... resto del formulario ... -->
</form>
     <form>
     <form id="categoria" action="p_categoria.php" method="POST" onsubmit="return validarCategoria()">
     <label for="nombre">Nombre:</label>
     <input type="text" id="nombre" name="nombre" required>
     <br>
     <button type="submit" class="btn">Ingresar</button>
    
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
    </div>

    <?php include 'footer.php'; ?>


    <script src="validaciones.js"></script>
    <script>
// Aquí va el código JavaScript específico para este formulario
<!-- En categoria.php -->
<form id="categoriaForm" action="procesar_categoria.php" method="POST" onsubmit="return validarCategoria()">
    <!-- ... resto del formulario ... -->
</form>

<script src="validaciones.js"></script>
<script>
function validarCategoria() {
    let isValid = true;
    
    // Validar nombre de categoría
    const nombre = document.getElementById('nombre');
    if (!nombre.value.trim()) {
        showError('Por favor, ingrese el nombre de la categoría.');
        isValid = false;
    }
    
    return isValid;
}
</body>
</script>
</html>
