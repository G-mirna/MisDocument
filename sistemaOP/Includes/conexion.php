<?php
$server = "localhost";
$username = "root";
$password = ""; // Sin contraseña por defecto
$database = "agro_ferreteria_rodriguez";

// Crear la conexión
$conn = new mysqli($server, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>

