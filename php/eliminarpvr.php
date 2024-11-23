<?php
require_once("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Realiza la eliminación del registro
    $query = "DELETE FROM proveedor WHERE ID = $id";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        // Redirecciona a la página principal después de eliminar
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El registro fue Eliminado correctamente',
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
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    echo "ID no proporcionado para eliminar el registro.";
}
?>
