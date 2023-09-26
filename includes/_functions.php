<?php

require_once("_db.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'eliminar_producto':
            eliminar_producto();
            break;
        case 'editar_producto':
            editar_producto();
            break;
        case 'insertar_productos':
            insertar_productos();
            break;
    }
}

function insertar_productos() {
    global $conexion;
    extract($_POST);

    // Variables donde se almacenan los valores de la imagen
    $tamanoArchvio = $_FILES['foto']['size'];
    
    // Lectura de la imagen
// Lectura de la imagen
$imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
$binariosImagen = addslashes(fread($imagenSubida, $tamanoArchvio));

$query = "INSERT INTO productos (nombre, descripcion, color, precio, cantidad, cantidad_min, categorias, imagen)
          VALUES (?, ?, ?, ?, ?, ?, ?, CONVERT(varbinary(max), ?));";

    $params = [$nombre, $descripcion, $color, $precio, $cantidad, $cantidad_min, $categorias, $binariosImagen];

    $stmt = sqlsrv_query($conexion, $query, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    header("Location: ../views/usuarios/");
}

function editar_producto() {
    global $conexion;
    extract($_POST);

    // Variables donde se almacenan los valores de la imagen
    $tamanoArchvio = $_FILES['foto']['size'];
    
    // Lectura de la imagen
  // Lectura de la imagen
$imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
$binariosImagen = addslashes(fread($imagenSubida, $tamanoArchvio));

$query = "UPDATE productos SET nombre = ?, descripcion = ?, color = ?, precio = ?, cantidad = ?, categorias = ?, imagen = CONVERT(varbinary(max), ?) WHERE id = ?";

    $params = [$nombre, $descripcion, $color, $precio, $cantidad, $categorias, $binariosImagen, $id];

    $stmt = sqlsrv_query($conexion, $query, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    header("Location: ../views/usuarios/");
}

function eliminar_producto() {
    global $conexion;
    extract($_POST);

    $query = "DELETE FROM productos WHERE id = ?";
    $params = [$id];

    $stmt = sqlsrv_query($conexion, $query, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    header("Location: ../views/usuarios/");
}

?>
