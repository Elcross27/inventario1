<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="styles.css" type="text/css"> <!-- Asegúrate de enlazar el archivo CSS -->
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
        <h1>Bienvenido a la Gestión de Inventario</h1>
        <p>Esta plataforma te permite administrar eficientemente tu inventario, controlar productos, proveedores y movimientos de stock.</p>
        <h2>Características</h2>
        <ul>
            <li>Registro y gestión de productos</li>
            <li>Seguimiento de proveedores</li>
            <li>Clasificación por categorías</li>
            <li>Historial de movimientos de inventario</li>
        </ul>
        <h2>Cómo empezar</h2>
        <p>Para comenzar, inicia sesión o regístrate si aún no tienes una cuenta. Una vez dentro, podrás acceder a todas las funcionalidades disponibles.</p>
    </div>
    
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>

</html>
