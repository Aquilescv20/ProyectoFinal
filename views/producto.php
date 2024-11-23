<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<div id="sidemenu" class="menu-collapsed">

    <div id="header">
        <div id="title">
            <span>MAS MOTOS SRL</span>
        </div>
        <div id="menu-btn">
            <div class="linea"></div>
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
    </div>

    <div id="profile">
        <div id="photo">
            <img src="../img/dashboard/perfil.png" alt="">
        </div>
        <div id="name">
            <span>user</span>
        </div>
    </div>

    <div id="menu-items">
        <div class="item">
            <a href="index.php">
                <div class="icon">
                    <img src="../img/dashboard/casa.webp" alt="">
                </div>
                <div class="title">
                    <span>Dashboard</span>
                </div>
            </a>
        </div>
        <br>
        <div class="item">
            <a href="#">
                <div class="icon"><img src="../img/dashboard/ventas.webp" alt=""></div>
                <div class="title"><span>Ventas</span></div>
            </a>
        </div>
        <br>
        <div class="item">
            <a href="personal.php">
                <div class="icon"><img src="../img/dashboard/users.webp" alt=""></div>
                <div class="title"><span>Empleados</span></div>
            </a>
        </div>
        <br>
        <div class="item">
            <a href="proveedor.php">
                <div class="icon"><img src="../img/dashboard/provee.webp" alt=""></div>
                <div class="title"><span>Proveedores</span></div>
            </a>
        </div>
        <br>
        <div class="item">
            <a href="#">
                <div class="icon"><img src="../img/dashboard/product.webp" alt=""></div>
                <div class="title"><span>Productos</span></div>
            </a>
        </div>
        <br>
        <div class="item">
            <a href="#">
                <div class="icon"><img src="../img/dashboard/compras.webp" alt=""></div>
                <div class="title"><span>Compras</span></div>
            </a>
        </div>
        <br>
        <div class="item">
            <a href="#">
                <div class="icon"><img src="../img/dashboard/reporte.webp" alt=""></div>
                <div class="title"><span>Reporte</span></div>
            </a>
        </div>
        <br>
    </div>

</div>
<br>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Ganancias (Mensuales)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">s/. 40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Ganancia Posibles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">s/. 
                                <?php
                                require_once("../php/db.php");
                                $result = mysqli_query($conexion, "SELECT SUM(PRECIO * STOCK) AS total FROM motos;");
                                while ($fila = mysqli_fetch_assoc($result)):
                                    ?>
                                    <?php echo $fila['total']; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Tarea
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pedidos Pendientes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid row" id="productos">
    <div class="col-sm-1"></div>

    <div class="col-10 p-4">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">MOTOS</h1>

            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar">
                    Agregar
                </button>
            </div>
        </div>
        <div class="container">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background: rgb(68, 105, 215);">
                    <tr class="text-white ">
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Precio s/.</th>
                        <th scope="col">Costo s/.</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../php/db.php");
                    $result = mysqli_query($conexion, "SELECT motos.ID, motos.CODIGO, motos.MODELO, motos.DESCRIP, marcas.MARCAS, motos.fecha, categoria.CAT, proveedor.NOMBRE, motos.PRECIO, motos.COSTO, motos.STOCK 
                        FROM motos 
                        INNER JOIN marcas ON motos.ID_MARCA = marcas.ID 
                        INNER JOIN categoria ON motos.ID_CATEG = categoria.ID 
                        INNER JOIN proveedor ON motos.ID_PROVE = proveedor.ID;");
                    while ($fila = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td>
                                <?php echo $fila['ID']; ?>
                            </td>
                            <td>
                                <?php echo $fila['CODIGO']; ?>
                            </td>
                            <td>
                                <?php echo $fila['MODELO']; ?>
                            </td>
                            <td>
                                <?php echo $fila['DESCRIP']; ?>
                            </td>
                            <td>
                                <?php echo $fila['MARCAS']; ?> <!-- Mostrar el nombre de la marca -->
                            </td>
                            <td>
                                <?php echo $fila['fecha']; ?>
                            </td>
                            <td>
                                <?php echo $fila['CAT']; ?>
                            </td>
                            <td>
                                <?php echo $fila['NOMBRE']; ?>
                            </td>
                            <td>
                                <?php echo $fila['PRECIO']; ?>
                            </td>
                            <td>
                                <?php echo $fila['COSTO']; ?>
                            </td>
                            <td>
                                <?php echo $fila['STOCK']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#editar<?php echo $fila['ID']; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <a href="../php/eliminarpro.php?id=<?php echo $fila['ID']; ?>" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
                            <?php include "../php/editar.php"; ?>
                        <?php endwhile; ?>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <div class="col-sm-1"></div>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');

        })</script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <body>

    </body>
    <?php include "agregar.php"; ?>

</html>