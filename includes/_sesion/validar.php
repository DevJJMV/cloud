



<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../_db.php");
$correo = $_POST['correo'];
$password = $_POST['password'];
session_start();
$_SESSION['correo'] = $correo;

// Establecer la conexión con SQL Server
$serverName = "your_server_name"; // reemplaza con el nombre de tu servidor
$connectionOptions = array(
    "Database" => "tienda",
    "Uid" => "your_username",      // reemplaza con tu usuario
    "PWD" => "your_password"      // reemplaza con tu contraseña
);
$conexion = sqlsrv_connect($serverName, $connectionOptions);

$consulta = "SELECT * FROM [user] WHERE correo = ? AND password = ?";
$params = array($correo, $password);
$resultado = sqlsrv_query($conexion, $consulta, $params);
$filas = sqlsrv_has_rows($resultado);

if ($filas) {
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
        $password = trim($_POST['password']);
        $telefono = trim($_POST['telefono']);

        $consulta = "INSERT INTO [user] (nombre, correo, telefono, password) VALUES (?, ?, ?, ?)";
        $params = array($nombre, $correo, $telefono, $password);
        sqlsrv_query($conexion, $consulta, $params);
    }
}

?>

