<?php 
include('includes/conexion.php');
?>

<!-- Contenido principal -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Panel de Control</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Reportes</button>
            </div>
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Opciones</button>
            </div>
        </div>
    </div>

    <!-- Contenido de la página -->
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'ventas':
                include 'ventas.php';
                break;
            case 'compras':
                include 'compras.php';
                break;
            case 'inventario':
                include 'inventario.php';
                break;
            case 'accesos':
                include 'accesos.php';
                break;
            case 'categorias':
                include 'categorias.php';
                break;
            default:
                echo '<p>Selecciona una opción del menú lateral.</p>';
                break;
        }
    } else {
        echo '<p>Selecciona una opción del menú lateral.</p>';
    }
    ?>
</main>

<?php 
// Verifica si el usuario ya está autenticado
session_start();
if (isset($_SESSION['usuario'])) {
    // Si el usuario ya está autenticado, redirige a la página principal del sistema
    header("Location: dashboard.php");
    exit();
}

// Aquí irá el código para manejar el inicio de sesión cuando lo implementemos más adelante
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Ferretería Rodríguez</title>
    <!-- Puedes agregar enlaces a tus estilos CSS aquí si lo deseas -->
</head>
<body>
    <h1>Agro Ferretería Rodríguez</h1>
    <form action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php
    $conn->close(); // Cierra la conexión al final del archivo
    ?>
</body>
</html>
