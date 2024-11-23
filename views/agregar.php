<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Agregar moto</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../php/insertar.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo:</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" required>
                            </div>
                        </div>


                        <div class="col-sm-2">
                            <div class="mb-3">
                                <label for="generar" class="form-label text-white">Generar</label>
                                <button class="btn bg-primary" onclick="generarCodigo()">
                                    <i class="bi bi-shuffle"></i></button>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div>
                                <label for="modelo" class="form-label">Modelo:</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <select class="form-select" aria-label="Default select example" id="marca" name="marca"
                            required>
                            <?php
                            require_once("../php/db.php");
                            $result = mysqli_query($conexion, "SELECT marcas.ID, marcas.MARCAS FROM marcas;");
                            while ($fila = mysqli_fetch_assoc($result)):
                                ?>
                                <?php echo "<option value='{$fila['ID']}'>{$fila['MARCAS']}</option>"; ?>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" id="categoria" name="categoria"
                            required>
                            <?php
                            require_once("../php/db.php");
                            $result = mysqli_query($conexion, "SELECT categoria.ID, categoria.CAT FROM categoria;");
                            while ($fila = mysqli_fetch_assoc($result)):
                                ?>
                                <?php echo "<option value='{$fila['ID']}'>{$fila['CAT']}</option>"; ?>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="proveedor" class="form-label">Proveedor</label>
                        <select class="form-select" aria-label="Default select example" id="proveedor" name="proveedor"
                            required>
                            <?php
                            require_once("../php/db.php");
                            $result = mysqli_query($conexion, "SELECT proveedor.ID, proveedor.NOMBRE FROM proveedor;");
                            while ($fila = mysqli_fetch_assoc($result)):
                                ?>
                                <?php echo "<option value='{$fila['ID']}'>{$fila['NOMBRE']}</option>"; ?>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" class="form-control" min="1" step="0.01"
                                    oninput="validarPrecio(this)" id="precio" name="precio" placeholder="s/ 00.00">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="costo" class="form-label">Costo</label>
                                <input type="number" class="form-control" min="1" step="0.01"
                                    oninput="validarCosto(this)" id="costo" name="costo" placeholder="s/ 00.00">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="stock" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" min="1" name="stock" step="1" id="stock"
                                    oninput="validarStock(this)">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="agregarpersonal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Agregar Personal</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../php/insertarper.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="apellidop" class="form-label">Apellido P.</label>
                                <input type="text" class="form-control" id="apellidop" name="apellidop" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div>
                                <label for="apellidom" class="form-label">Apellido M.</label>
                                <input type="text" class="form-control" id="apellidom" name="apellidom" required>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Escriba su E-mail"
                            aria-label="Escriba su E-mail" aria-describedby="basic-addon2" id="email" name="email"
                            required>
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direcciòn</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="number" class="form-control" min="1" step="1" oninput="validarDNI(this)"
                                    id="dni" name="dni" placeholder="DNI">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" min="1" name="telefono" step="1" id="telefono"
                                    oninput="validarTelefono(this)" placeholder="Telefono">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cargo" class="form-label">Cargo</label>
                        <select class="form-select" aria-label="Default select example" id="cargo" name="cargo"
                            required>
                            <?php
                            require_once("../php/db.php");
                            $result = mysqli_query($conexion, "SELECT cargo.ID, cargo.PERS FROM cargo");
                            while ($fila = mysqli_fetch_assoc($result)):
                                ?>
                                <?php echo "<option value='{$fila['ID']}'>{$fila['PERS']}</option>"; ?>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="registerpersonal"
                            name="registrarpersonal">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="agregarproveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Agregar proveedor</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../php/insertarpvr.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="ruc" class="form-label">RUC/DNI</label>
                                <input type="number" class="form-control" id="ruc" name="ruc" min="1" step="1"
                                    oninput="validarRUC(this)" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direcciòn</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>


                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" class="form-control" min="1" name="telefono" step="1" id="telefono"
                                oninput="validarTelefono(this)" placeholder="Telefono" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <select class="form-select" aria-label="Default select example" id="tipo" name="tipo"
                                    required>
                                    <?php
                                    require_once("../php/db.php");
                                    $result = mysqli_query($conexion, "SELECT tipoproveedor.ID, tipoproveedor.TIPOP FROM `tipoproveedor`");
                                    while ($fila = mysqli_fetch_assoc($result)):
                                        ?>
                                        <?php echo "<option value='{$fila['ID']}'>{$fila['TIPOP']}</option>"; ?>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select class="form-select" aria-label="Default select example" id="std" name="std"
                                    required>
                                    <?php
                                    require_once("../php/db.php");
                                    $result = mysqli_query($conexion, "SELECT estado.ID, estado.STD FROM `estado` WHERE 1");
                                    while ($fila = mysqli_fetch_assoc($result)):
                                        ?>
                                        <?php echo "<option value='{$fila['ID']}'>{$fila['STD']}</option>"; ?>
                                    <?php endwhile; ?>
                                    </option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
<script>
    const stock = document.querySelector("#stock");
    const codigo = document.querySelector("#codigo");

    function validarCosto(input) {
        const valor = input.value;
        if (isNaN(valor) || valor <= 0 || (valor * 100) % 1 !== 0) {
            Swal.fire(
                'Costo invalido',
                'Intentelo de nuevo',
                'error'
            )
            input.value = "";
        }
    }

    function validarPrecio(input) {
        const valor = input.value;
        if (isNaN(valor) || valor <= 0 || (valor * 100) % 1 !== 0) {
            Swal.fire(
                'Precio invalido',
                'Intentelo de nuevo',
                'error'
            )
            input.value = "";
        }
    }

    function validarStock(input) {
        const valor = input.value;
        if (isNaN(valor) || valor <= 0) {
            Swal.fire(
                'Cantidad invalida',
                'Intentelo de nuevo',
                'error'
            )
            input.value = "";
        }
    }

    function validarTelefono(input) {
        let valor = input.value;
        valor = valor.replace(/\D/g, '');
        if (valor.length === 10 || isNaN(valor) || valor <= 0 || parseInt(valor) > 999999999) {
            Swal.fire(
                'telefono inválida',
                'Inténtelo de nuevo con 9 números positivos',
                'error'
            );
            input.value = "";
        }
    }
    function validarDNI(input) {
        let valor = input.value;
        valor = valor.replace(/\D/g, '');
        if (valor.length === 9 || isNaN(valor) || valor <= 0 || parseInt(valor) > 99999999) {
            Swal.fire(
                'DNI inválida',
                'Inténtelo de nuevo con 8 números positivos',
                'error'
            );
            input.value = "";
        }
    }
    function validarRUC(input) {
        let valor = input.value;
        valor = valor.replace(/\D/g, '');
        if (valor.length === 12 || isNaN(valor) || valor <= 0 || parseInt(valor) > 99999999999) {
            Swal.fire(
                'DNI o RUC inválida',
                'Inténtelo de nuevo con 8 o 11 números positivos',
                'error'
            );
            input.value = "";
        }
    }


    function generarCodigo() {
        const date = new Date();
        const msmtsrl = "MT";

        // Generar un código aleatorio de 6 caracteres
        const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let codigo = "";
        for (let i = 0; i < 6; i++) {
            const randomIndex = Math.floor(Math.random() * caracteres.length);
            codigo += caracteres.charAt(randomIndex);
        }

        // Usar la fecha y MSMTSRL para formar parte del código
        const codigoFinal = codigo + (date.getMonth() + 1) + msmtsrl + codigo;

        // Actualizar el valor del campo de entrada sin recargar la página
        document.getElementById("codigo").value = codigoFinal;
    }
</script>