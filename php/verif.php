<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Conectar a la base de datos 
$mysqli = new mysqli("localhost", "root", "", "masmotos", "3307");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['username'];
$contrasena = $_POST['password'];

// Consulta para verificar las credenciales
$consulta = "SELECT * FROM adminp WHERE CORREO = '$usuario' AND PASS = '$contrasena'";
$resultado = $conexion->query($consulta);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Inicio de sesión exitoso
    header("Location: ../views/index.php");
} else {
    // Inicio de sesión fallido
    header("Location: ../index.html");
}

$conexion->close();
}
?>