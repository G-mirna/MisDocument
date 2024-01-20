<!-- modules/categorias.php -->
<?php
include('../includes/conexion.php'); // Incluye el archivo de conexión

// Agregar categoría
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombreCategoria'])) {
        $nombreCategoria = $_POST['nombreCategoria'];

        // Realiza la inserción en la base de datos
        $queryInsert = "INSERT INTO CATEGORIA (Nombre_categoria) VALUES ('$nombreCategoria')";
        $resultadoInsert = $conn->query($queryInsert);

        if ($resultadoInsert) {
            echo '<p class="mensaje-exito">Categoría agregada con éxito.</p>';
        } else {
            echo '<p class="mensaje-error">Error al agregar la categoría.</p>';
        }
    }
}

// Búsqueda por ID
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['buscarPorId'])) {
        $idCategoria = $_GET['buscarPorId'];

        // Realiza la consulta por ID en la base de datos
        $querySelect = "SELECT * FROM CATEGORIA WHERE Id_Categoria = $idCategoria";
        $resultadoSelect = $conn->query($querySelect);

        if ($resultadoSelect->num_rows > 0) {
            while ($row = $resultadoSelect->fetch_assoc()) {
                echo '<p>ID: ' . $row['Id_Categoria'] . '</p>';
                echo '<p>Nombre: ' . $row['Nombre_categoria'] . '</p>';
            }
        } else {
            echo '<p class="mensaje-error">No se encontró ninguna categoría con el ID proporcionado.</p>';
        }
    }
}

// Consulta todas las categorías
$querySelectAll = "SELECT * FROM CATEGORIA";
$resultadoSelectAll = $conn->query($querySelectAll);
?>

<!-- Formulario de Agregar Categoría -->
<form action="categorias.php" method="post">
    <label for="nombreCategoria">Nombre de la Categoría:</label>
    <input type="text" id="nombreCategoria" name="nombreCategoria" required>
    <button type="submit">Agregar</button>
</form>

<!-- Formulario de Búsqueda por ID -->
<form action="categorias.php" method="get">
    <label for="buscarPorId">Buscar Categoría por ID:</label>
    <input type="text" id="buscarPorId" name="buscarPorId" required>
    <button type="submit">Buscar</button>
</form>

<!-- Tabla de Todas las Categorías -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre de la Categoría</th>
    </tr>
    <?php
    while ($rowAll = $resultadoSelectAll->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $rowAll['Id_Categoria'] . '</td>';
        echo '<td>' . $rowAll['Nombre_categoria'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>

<!-- Cierra la conexión al final del archivo -->
<?php
$conn->close();
?>
