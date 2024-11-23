<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos 
    $mysqli = new mysqli("localhost", "root", "", "masmotos", "3307");

    // Verificar la conexión
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Acceder a los datos del formulario
    $codigo = $_POST["codigo"];
    $modelo = $_POST["modelo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $marca = $_POST["marca"];
    $categoria = $_POST["categoria"];
    $proveedor = $_POST["proveedor"];
    $precio = $_POST["precio"];
    $costo = $_POST["costo"];
    $stock = $_POST["stock"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO `motos` (`ID`, `CODIGO`, `MODELO`, `DESCRIP`, `fecha`, `ID_MARCA`, `ID_CATEG`, `ID_PROVE`, `PRECIO`, `COSTO`, `STOCK`) 
            VALUES (NULL, '$codigo', '$modelo', '$descripcion', '$fecha', '$marca', '$categoria', '$proveedor', '$precio', '$costo', '$stock')";

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
                location.assign('../views/producto.php');
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