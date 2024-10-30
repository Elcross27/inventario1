<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
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
            <a href="proveedores.php">Proveedores</a>
            <a href="categoria.php">Categoría</a>
            <a href="movimientos.php" class="active">Movimientos</a> <!-- Resaltamos esta página -->
            <a href="login.php" class="btn">Iniciar Sesión</a>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container">
        <h1>Movimientos</h1>
        <p>Aquí podrás organizar y gestionar los movimientos de inventario.</p>

        <!-- Formulario para registrar nuevos movimientos -->
        <form id="movimientoForm" action="procesar_movimiento.php" method="POST" onsubmit="return validarMovimiento()">
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>
    <br>
    <label for="tipodm">Tipo De Movimiento:</label>
    <input type="text" id="tipodm" name="tipodm" required>
    <br>
    <label for="id_producto">Producto:</label>
    <select id="id_producto" name="id_producto" required>
        <?php
        // Conectar a la base de datos
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

        // Obtener productos de la base de datos
        $result = $conn->query("SELECT id_producto, nombre FROM productos");

        // Mostrar los productos en el select
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id_producto']}'>{$row['nombre']}</option>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </select>
        <br>
    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required>

    <button type="submit" class="btn">Registrar Movimiento</button>
</form>


        <!-- Aquí podrías agregar una sección para mostrar los movimientos existentes si lo deseas -->
    </div>

    <?php include 'footer.php'; ?>

    <script src="validaciones.js"></script>
<script>
// Aquí va el código JavaScript específico para este formulario
<!-- En movimientos.php -->
<form id="movimientoForm" action="procesar_movimiento.php" method="POST" onsubmit="return validarMovimiento()">
    <!-- ... resto del formulario ... -->
</form>

<script src="validaciones.js"></script>
<script>
function validarMovimiento() {
    let isValid = true;
    
    // Validar fecha
    const fecha = document.getElementById('fecha');
    if (!fecha.value) {
        showError('Por favor, seleccione una fecha.');
        isValid = false;
    }
    
    // Validar tipo de movimiento
    const tipodm = document.getElementById('tipodm');
    if (!tipodm.value.trim()) {
        showError('Por favor, ingrese el tipo de movimiento.');
        isValid = false;
    }
    
    // Validar producto
    const idProducto = document.getElementById('id_producto');
    if (!idProducto.value) {
        showError('Por favor, seleccione un producto.');
        isValid = false;
    }
    
    // Validar cantidad
    const cantidad = document.getElementById('cantidad');
    if (!isValidQuantity(cantidad.value)) {
        showError('Por favor, ingrese una cantidad válida.');
        isValid = false;
    }
    
    return isValid;
}
</script>

</body>
</html>
