<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos 
    $mysqli = new mysqli("localhost", "root", "", "masmotos", "3307");

    // Verificar la conexión
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Acceder a los datos del formulario
    $nombre = $_POST["nombre"];
    $ruc = $_POST["ruc"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $tipo = $_POST["tipo"];
    $std = $_POST["std"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO `proveedor` (`ID`, `NOMBRE`, `RUC`, `DIRECCION`, `TELEFONO`, `ID_TIPO`, `ID_STD`) 
            VALUES (NULL, '$nombre', '$ruc', '$direccion', '$telefono', '$tipo', '$std')";

    // Ejecutar la consulta
    if ($mysqli->query($sql) === TRUE) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El registro fue insertado correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {
                location.assign('../views/proveedor.php');
              });
    });
        </script>";
    } else {
        echo "Error al insertar los datos: " . $mysqli->error;
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}
?>