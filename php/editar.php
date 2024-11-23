<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

</head>


<div class="modal fade" id="editar<?php echo $fila['ID']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar el registro de
                    <?php echo $fila['MODELO']; ?>
                </h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../php/functions.php" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo</label>
                                <input type="text" id="codigo" name="codigo" class="form-control"
                                    value="<?php echo $fila['CODIGO']; ?>" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" id="modelo" name="modelo" class="form-control"
                                    value="<?php echo $fila['MODELO']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                            value="<?php echo $fila['DESCRIP']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha"
                            value="<?php echo $fila['fecha']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <select class="form-select" aria-label="Default select example" id="marca" name="marca">
                            <option value="1" <?php if ($fila['MARCAS'] == 'RONCO')
                                echo 'selected'; ?>>RONCO</option>
                            <option value="2" <?php if ($fila['MARCAS'] == 'BAJAJ')
                                echo 'selected'; ?>>BAJAJ</option>
                            <option value="3" <?php if ($fila['MARCAS'] == 'HAOJUE')
                                echo 'selected'; ?>>HAOJUE</option>
                            <option value="4" <?php if ($fila['MARCAS'] == 'LINHAI')
                                echo 'selected'; ?>>LINHAI</option>
                            <option value="5" <?php if ($fila['MARCAS'] == 'NEXUS')
                                echo 'selected'; ?>>NEXUS</option>
                            <option value="6" <?php if ($fila['MARCAS'] == 'CMDRacing')
                                echo 'selected'; ?>>CMDRacing
                            </option>
                            <option value="7" <?php if ($fila['MARCAS'] == 'WANXIN')
                                echo 'selected'; ?>>WANXIN</option>
                            <option value="8" <?php if ($fila['MARCAS'] == 'SUZUKI')
                                echo 'selected'; ?>>SUZUKI</option>
                            <option value="9" <?php if ($fila['MARCAS'] == 'JCH')
                                echo 'selected'; ?>>JCH</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" id="categoria" name="categoria"
                            value="<?php echo $fila['CAT']; ?>">
                            <option value="1" <?php if ($fila['CAT'] == 'DEPORTIVA')
                                echo 'selected'; ?>>DEPORTIVA
                            </option>
                            <option value="2" <?php if ($fila['CAT'] == 'TODO TERRENO')
                                echo 'selected'; ?>>TODO TERRENO
                            </option>
                            <option value="3" <?php if ($fila['CAT'] == 'SCOOTER')
                                echo 'selected'; ?>>SCOOTER</option>
                            <option value="4" <?php if ($fila['CAT'] == 'CUATRIMOTO')
                                echo 'selected'; ?>>CUATRIMOTO
                            </option>
                            <option value="5" <?php if ($fila['CAT'] == 'MOTO CARGUERO')
                                echo 'selected'; ?>>MOTO CARGUERO
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="proveedor" class="form-label">Proveedor</label>
                        <select class="form-select" aria-label="Default select example" id="proveedor" name="proveedor">
                            <option value="1" <?php if ($fila['NOMBRE'] == 'Daniel')
                                echo 'selected'; ?>>Daniel</option>
                            <option value="2" <?php if ($fila['NOMBRE'] == 'EMPRESA SAC')
                                echo 'selected'; ?>>EMPRESA SAC
                            </option>
                        </select>
                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" class="form-control" min="1" step="0.01"
                                    oninput="validarPrecio(this)" id="precio" name="precio" placeholder="s/ 00.00"
                                    value="<?php echo $fila['PRECIO']; ?>">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="costo" class="form-label">Costo</label>
                                <input type="number" class="form-control" min="1" step="0.01"
                                    oninput="validarCosto(this)" id="costo" name="costo" placeholder="s/ 00.00"
                                    value="<?php echo $fila['COSTO']; ?>">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="stock" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" min="1" name="stock" step="1" id="stock"
                                    oninput="validarStock(this)" value="<?php echo $fila['STOCK']; ?>">
                            </div>
                        </div>



                        <input type="hidden" name="accion" value="editar">
                        <input type="hidden" name="id" value="<?php echo $fila['ID']; ?>">
                        <br>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="editarpersonal<?php echo $fila['ID']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar el registro de
                    <?php echo $fila['NOMBRE']; ?>
                </h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../php/functions.php" method="POST">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="<?php echo $fila['NOMBRE']; ?>">
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="apellidop" class="form-label">Apellido P.</label>
                                <input type="text" class="form-control" id="apellidop" name="apellidop"
                                    value="<?php echo $fila['APELLIDOP']; ?>">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div>
                                <label for="apellidom" class="form-label">Apellido M.</label>
                                <input type="text" class="form-control" id="apellidom" name="apellidom"
                                    value="<?php echo $fila['APELLIDOM']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Escriba su E-mail"
                            aria-label="Escriba su E-mail" aria-describedby="basic-addon2" id="email" name="email"
                            value="<?php echo $fila['EMAIL']; ?>" required>
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direcciòn</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            value="<?php echo $fila['DIRECCION']; ?> " required>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="number" class="form-control" min="1" step="0.01" oninput="validarDNI(this)"
                                    id="dni" name="dni" placeholder="DNI" value="<?php echo $fila['DNI']; ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" min="1" name="telefono" step="1" id="telefono"
                                    oninput="validarTelefono(this)" placeholder="Telefono"
                                    value="<?php echo $fila['TELEFONO']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cargo" class="form-label">Cargo</label>
                        <select class="form-select" aria-label="Default select example" id="cargo" name="cargo"
                            required>
                            <option value="1" <?php if ($fila['PERS'] == 'Administrador')
                                echo 'selected'; ?>>Administrador</option>
                            <option value="2" <?php if ($fila['PERS'] == 'Empleado')
                                echo 'selected'; ?>>Empleado</option>
                        </select>
                    </div>
                    <br>



                    <input type="hidden" name="accionpersonal" value="editarpersonal">
                    <input type="hidden" name="id" value="<?php echo $fila['ID']; ?>">
                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>


            </form>
        </div>
    </div>
</div>

</div>

<div class="modal fade" id="editarpvr<?php echo $fila['ID']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar el registro de
                    <?php echo $fila['NOMBRE']; ?>
                </h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../php/functions.php" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="<?php echo $fila['NOMBRE']; ?>">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="ruc" class="form-label">RUC/DNI</label>
                                <input type="number" class="form-control" id="ruc" name="ruc" min="1"step="1"
                                    value="<?php echo $fila['RUC']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direcciòn</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            value="<?php echo $fila['DIRECCION']; ?> " required>
                    </div>


                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" class="form-control" min="1" name="telefono" step="1" id="telefono"
                                oninput="validarTelefono(this)" placeholder="Telefono"
                                value="<?php echo $fila['TELEFONO']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <select class="form-select" aria-label="Default select example" id="tipo" name="tipo"
                                    required>
                                    <option value="1" <?php if ($fila['TIPOP'] == 'Empresa')
                                        echo 'selected'; ?>>Empresa</option>
                                    <option value="2" <?php if ($fila['TIPOP'] == 'Persona natural')
                                        echo 'selected'; ?>>Persona natural
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select class="form-select" aria-label="Default select example" id="std" name="std"
                                    required>
                                    <option value="1" <?php if ($fila['STD'] == 'Activo')
                                        echo 'selected'; ?>>Activo</option>
                                    <option value="2" <?php if ($fila['STD'] == 'Inactivo')
                                        echo 'selected'; ?>>Inactivo
                                    </option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <br>



                    <input type="hidden" name="accionproveedor" value="editarproveedor">
                    <input type="hidden" name="id" value="<?php echo $fila['ID']; ?>">
                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>


            </form>
        </div>
    </div>
</div>

</div>

</html>