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
    $apellidop = $_POST["apellidop"];
    $apellidom = $_POST["apellidom"];
    $email = $_POST["email"];
    $direccion = $_POST["direccion"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $cargo = $_POST["cargo"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO `personal` (`ID`, `NOMBRE`, `APELLIDOP`, `APELLIDOM`, `DNI`, `EMAIL`, `TELEFONO`, `DIRECCION`, `ID_CARGO`) 
            VALUES (NULL, '$nombre', '$apellidop', '$apellidom', '$dni', '$email', '$telefono', '$direccion', '$cargo')";

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
                location.assign('../views/personal.php');
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