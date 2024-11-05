<!-- productos.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
            <a href="productos.php" class="active">Productos</a> <!-- Resaltamos esta página -->
            <a href="proveedores.php">Proveedores</a>
            <a href="categoria.php">Categorías</a>
            <a href="movimientos.php">Movimientos</a>
            <a href="login.php" class="btn">Iniciar Sesión</a>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container">
        <h1>Agregar Productos</h1>
    <!-- En productos.php -->
<form id="productoForm" action="procesar_producto.php" method="POST" onsubmit="return validarProducto()">
    <label for="nombre" class="lñ">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="descripción">Descripción:</label>
        <input type="text" id="descripción" name="descripción" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>
        <br>
        <label for="cantidad_en_stock">Cantidad en stock:</label>
        <input type="number" id="cantidad_en_stock" name="cantidad_en_stock" required>
        <br>
        <label for="fecha_ingreso">Fecha ingreso:</label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required>
        <br>
        <label for="id_proveedores">Proveedor:</label>
        <select id="id_proveedores" name="id_proveedores" required> </select>
        
        <br>
        <button type="submit" class="btn">Ingresar</button>

        // conexion.php
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

    <footer>
<?php include 'footer.php'; ?>
</footer>

<script src="validaciones.js"></script>
<script>
// Aquí va el código JavaScript específico para este formulario
<!-- En productos.php -->
<form id="productoForm" action="procesar_producto.php" method="POST" onsubmit="return validarProducto()">
    <!-- ... resto del formulario ... -->
</form>

<script src="validaciones.js"></script>
<script>
function validarProducto() {
    let isValid = true;
    
    // Validar nombre
    const nombre = document.getElementById('nombre');
    if (!nombre.value.trim()) {
        showError('Por favor, ingrese el nombre del producto.');
        isValid = false;
    }
    
    // Validar descripción
    const descripcion = document.getElementById('descripcion');
    if (!descripcion.value.trim()) {
        showError('Por favor, ingrese una descripción.');
        isValid = false;
    }
    
    // Validar precio
    const precio = document.getElementById('precio');
    if (!isValidPrice(precio.value)) {
        showError('Por favor, ingrese un precio válido.');
        isValid = false;
    }
    
    // Validar stock
    const stock = document.getElementById('cantidad_en_stock');
    if (!isValidQuantity(stock.value)) {
        showError('Por favor, ingrese una cantidad válida para el stock.');
        isValid = false;
    }
    
    // Validar proveedor
    const proveedor = document.getElementById('id_proveedor');
    if (!proveedor.value) {
        showError('Por favor, seleccione un proveedor.');
        isValid = false;
    }
    
    return isValid;
}
</script>
</body>
</html>
