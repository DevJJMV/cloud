<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div id="content">
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <center><h1>Productos</h1></center>
                    <a href="producto_agregar.php">
                        <input class="btn btn-primary" type="button" value="Agregar producto">
                    </a>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Color</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Cantidad minima</th>
                                    <th>Categorias</th>
                                    <th>Imagen</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $categoria = $_GET['categoria'];

                                $sql = "SELECT * FROM productos WHERE categorias = ?";
                                $params = array($categoria);

                                $query = sqlsrv_query($conexion, $sql, $params);

                                if ($query === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                }

                                $productos = array();
                                while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                                    $productos[] = $row;
                                }

                                foreach ($productos as $row) {
                                    if ($row['cantidad'] <= $row['cantidad_min']) {
                                        $color = '#F78E8E';
                                        $clase = 'problema';
                                    } else {
                                        $clase = 'correcto';
                                    }
                                    ?>
                                    <style>
                                        .problema {
                                            background-color: <?php echo $color ?>;
                                            color: #000000;
                                        }
                                    </style>
                                    <tr>
                                        <td <?php echo 'class="' . $row['categorias'] . '"'; ?>><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['descripcion']; ?></td>
                                        <td><?php echo $row['color']; ?></td>
                                        <td><?php echo $row['precio']; ?></td>
                                        <td <?php echo 'class="' . $clase . '"'; ?>><?php echo $row['cantidad']; ?></td>
                                        <td><?php echo $row['cantidad_min']; ?></td>
                                        <td><?php echo $row['categorias']; ?></td>
                                        <td><img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']); ?>" ></td>
                                        <td>
                                            <a href="producto_editar.php?id=<?php echo $row['id'] ?>">
                                                Editar
                                            </a>
                                            <a>|</a>
                                            <a href="producto_eliminar.php?id=<?php echo $row['id'] ?>">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                if (count($productos) == 0) {
                                    ?>
                                    <tr class="text-center">
                                        <td colspan="4">No existe registros</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9"></div>
            </div>
        </div>
    </section>
</div>
<?php require '../../includes/_footer.php' ?>
</html>
