
<?php

if (isset($_POST['accionpersonal'])) {
    switch ($_POST['accionpersonal']) {
            //casos de registros
        case 'editarpersonal':
            editarpersonal();
            break;
    }
}

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        case 'editar':
            editar();
            break;
    }
}
if (isset($_POST['accionproveedor'])) {
    switch ($_POST['accionproveedor']) {
            //casos de registros
        case 'editarproveedor':
            editarproveedor();
            break;
    }
}

function editarpersonal()
{

    extract($_POST);
    require_once("db.php");

    $consulta = "UPDATE `personal` SET `NOMBRE` = '$nombre',`APELLIDOP` = '$apellidop', `APELLIDOM` = '$apellidom', `DNI` = '$dni', `EMAIL` = '$email', `TELEFONO` = '$telefono', `DIRECCION` = '$direccion', `ID_CARGO` = '$cargo'
    WHERE `ID` = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El registro fue actualizado correctamente',
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
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Algo salio mal. Intenta de nuevo',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {
                location.assign('../views/personal.php');
              });
    });
        </script>";
    }
}

function editar()
{

    extract($_POST);
    require_once("db.php");

    $consulta = "UPDATE `motos` SET `CODIGO` = '$codigo',`MODELO` = '$modelo', `DESCRIP` = '$descripcion', `ID_MARCA` = '$marca', `fecha` = '$fecha', `ID_CATEG` = '$categoria', `ID_PROVE` = '$proveedor', `PRECIO` = '$precio', `COSTO` = '$costo', `STOCK` = '$stock' 
    WHERE `ID` = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El registro fue actualizado correctamente',
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
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Algo salio mal. Intenta de nuevo',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {
                location.assign('../views/producto.php');
              });
    });
        </script>";
    }
}

function editarproveedor()
{

    extract($_POST);
    require_once("db.php");

    $consulta = "UPDATE `proveedor` SET `NOMBRE` = '$nombre',`RUC` = '$ruc', `DIRECCION` = '$direccion', `ID_TIPO` = '$tipo', `ID_STD` = '$std'
    WHERE `ID` = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El registro fue actualizado correctamente',
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
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Algo salio mal. Intenta de nuevo',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {
                location.assign('../views/proveedor.php');
              });
    });
        </script>";
    }
}

