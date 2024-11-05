<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link rel="stylesheet" href="styles.css"> <!-- Asegúrate de enlazar el archivo CSS -->
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="logo">
            <h1 style="color: white;">Inventario</h1>
        </div>
        <div>
            <a href="index.php">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="proveedores.php" class="active">Proveedores</a> <!-- Resaltamos esta página -->
            <a href="categoria.php">Categorías</a>
            <a href="movimientos.php">Movimientos</a>
            <a href="login.php" class="btn">Iniciar Sesión</a>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container">
        <h1>Agregar Proveedores</h1>
        <form id="proveedorForm" action="procesar_proveedor.php" method="POST" onsubmit="return validarProveedor()">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required>
    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
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
<!-- En proveedores.php -->
<form id="proveedorForm" action="procesar_proveedor.php" method="POST" onsubmit="return validarProveedor()">
    <!-- ... resto del formulario ... -->
</form>

<script src="validaciones.js"></script>
<script>
function validarProveedor() {
    let isValid = true;
    
    // Validar nombre
    const nombre = document.getElementById('nombre');
    if (!nombre.value.trim()) {
        showError('Por favor, ingrese el nombre del proveedor.');
        isValid = false;
    }
    
    // Validar contacto
    const contacto = document.getElementById('contacto');
    if (!contacto.value.trim()) {
        showError('Por favor, ingrese el contacto.');
        isValid = false;
    }
    
    // Validar teléfono
    const telefono = document.getElementById('telefono');
    if (!isValidPhone(telefono.value)) {
        showError('Por favor, ingrese un número de teléfono válido.');
        isValid = false;
    }
    
    // Validar email
    const email = document.getElementById('email');
    if (!isValidEmail(email.value)) {
        showError('Por favor, ingrese un email válido.');
        isValid = false;
    }
    
    return isValid;
}
</script>

</body>
</html>
