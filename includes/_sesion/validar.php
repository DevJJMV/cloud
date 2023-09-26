<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../_db.php");
$correo = $_POST['correo'];
$password = $_POST['password'];
session_start();
$_SESSION['correo'] = $correo;

$consulta = "SELECT password FROM [user] WHERE correo = ?";
$params = array($correo);
$resultado = sqlsrv_query($conexion, $consulta, $params);
$row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);

if ($row && password_verify($password, $row['password'])) {
    header('Location: ../../views/usuarios/index.php');
} else {
    header('location: ../../index.php');
    session_destroy();
}

?>

<?php

/**
 * Parte de registro de usuarios
 */
if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['telefono']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $passwordHashed = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Hash the password
        $telefono = trim($_POST['telefono']);

        $consulta = "INSERT INTO [user] (nombre, correo, telefono, password) VALUES (?, ?, ?, ?)";
        $params = array($nombre, $correo, $telefono, $passwordHashed);
        sqlsrv_query($conexion, $consulta, $params);
    }
}

?>
